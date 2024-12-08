<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\MustVerifyEmail as MustVerifyEmailContract;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str; 
use Carbon\Carbon; 


use Illuminate\Support\Facades\Mail;
// mail
use App\Mail\ComiteMail\UtilisateurMail\ActivationCompteMail;
use App\Mail\ComiteMail\UtilisateurMail\ChangeMotPasseMail;
use App\Mail\ComiteMail\UtilisateurMail\ConfirmationMail;
use App\Mail\ComiteMail\UtilisateurMail\DesactivationCompteMail;
use App\Mail\ComiteMail\UtilisateurMail\EnregistrementCompteMail;
use App\Mail\ComiteMail\UtilisateurMail\TentativeConnexionMail;

class Utilisateurs extends Model implements AuthenticatableContract, MustVerifyEmailContract
{
    // Utilise les traits nécessaires
    use HasFactory, Notifiable, Authenticatable, HasUuids, MustVerifyEmail;

    // Définir la table associée au modèle
    protected $table = 'utilisateurs';
    protected $primaryKey = 'id_utilisateur';
    protected $fillable = [
        'matricule',
        'nom_prenom',
        'pays',
        'ville',
        'adresse',
        'sexe',
        'email',
        'numeros',
        'whatsapp',
        'nom_dossier',
        'lien_dossier',
        'password',
        'date_password',
        'type_utilisateur',
        'poste',
        'pays_id',
        'utilisateur_id',
        'etat_compte'
    ];

    


    // Les attributs qui doivent être cachés pour les tableaux
    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Les attributs qui doivent être castés en types natifs
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];



    /**
     * Fonction de mail de confirmation de compte, avec le mot de passe de connexion
     *
     * @param \App\Models\Utilisateur $newUtilisateur
     * @param string $motDePasseGenerer
     * @return bool
     */
    public static function ConfirmationAndPasswordAndSendEmail($newUtilisateur, $motDePasseGenerer)
    {
        // Déchiffrement de l'adresse e-mail du destinataire
        $recipientEmail = Crypt::decrypt($newUtilisateur->email);

        // Déchiffrement du nom et prénom du destinataire
        $nomPrenom = Crypt::decrypt($newUtilisateur->nom_prenom);

        // Génération de l'URL de confirmation avec l'adresse e-mail comme paramètre
        $confirmationUrl = route('confirmation', ['Email' => $recipientEmail]);

        // Envoi de l'e-mail de confirmation avec les détails nécessaires
        Mail::to($recipientEmail)->send(new ConfirmationMail($nomPrenom, $motDePasseGenerer, $confirmationUrl));

        return true;
    }


    /**
     * Fonction d'envoie du mail d'activation du compte
     *
     * @param \App\Models\Utilisateur $newUtilisateur
     * @return bool
     */
    public static function ActivationCompteAndSendEmail($UtilisateurCompte)
    {
        // Déchiffrement de l'adresse e-mail du destinataire
        $recipientEmail = Crypt::decrypt($UtilisateurCompte->email);

        // Déchiffrement du nom et prénom du destinataire
        $nomPrenom = Crypt::decrypt($UtilisateurCompte->nom_prenom);

        // Envoi de l'e-mail de confirmation avec les détails nécessaires
        Mail::to($recipientEmail)->send(new ActivationCompteMail($nomPrenom));

        return true;
    }

    
    /**
     * Fonction d'envoie du mail de desactivation du compte
     *
     * @param \App\Models\Utilisateur $newUtilisateur
     * @return bool
     */
    public static function DesactivationCompteAndSendEmail($UtilisateurCompte)
    {
        // Déchiffrement de l'adresse e-mail du destinataire
        $recipientEmail = Crypt::decrypt($UtilisateurCompte->email);

        // Déchiffrement du nom et prénom du destinataire
        $nomPrenom = Crypt::decrypt($UtilisateurCompte->nom_prenom);

        // Envoi de l'e-mail de confirmation avec les détails nécessaires
        Mail::to($recipientEmail)->send(new DesactivationCompteMail($nomPrenom));

        return true;
    }
     

    /**
     * Fonction de mail d'information pour la tentative de connexion avec un autre appareil
     *
     * @param \App\Models\Utilisateur $newUtilisateur
     * @param string $appareilTentative
     * @return bool
     */
    public static function TentativeConnexionAutreAndSendEmail($UtilisateurTentative, $DonneFormerSecurite, $ReseauxTentative)
    {
    
        // Créer un nouveau token d'API pour le choix de sécurité
        $token = $UtilisateurTentative->createToken('API Token Appareil Sécurité');

        // Ajouter une date d'expiration
        $expiresAt = now()->addMinutes(30);
        $token->accessToken->expires_at = $expiresAt;
        $token->accessToken->save();

        $tokenSecurite = $token->plainTextToken;

        // Déchiffrement de l'adresse e-mail du destinataire
        $recipientEmail = Crypt::decrypt($UtilisateurTentative->email);

        // Déchiffrement du nom et prénom du destinataire
        $nomPrenom = Crypt::decrypt($UtilisateurTentative->nom_prenom);

        // Déchiffrement des données de l'appareil
        $AdresseIp = Crypt::decrypt($ReseauxTentative->ip_address);
        $typeNavigateur = Crypt::decrypt($DonneFormerSecurite['type_navigateur']);
        $typeAppareil = Crypt::decrypt($DonneFormerSecurite['type_appareil']);
        $typeSysteme = Crypt::decrypt($DonneFormerSecurite['type_systeme_dexploitation']);
        $VersionSysteme = Crypt::decrypt($DonneFormerSecurite['version_systeme_dexploitation']);
    
        // Génération de l'URL de tentative de connexion comme paramètre pour le Oui
        $ouiSecuriteUrl = route('tentative-connexion', [
            'IdReseaux' => $ReseauxTentative->id_reseaux_utilisateur,
            'TokenSecurite' => $tokenSecurite,
            'securite' => 'oui'
        ]);

        // Génération de l'URL de tentative de connexion comme paramètre pour le Non
        $nonSecuriteUrl = route('tentative-connexion', [
            'IdReseaux' => $ReseauxTentative->id_reseaux_utilisateur,
            'TokenSecurite' => $tokenSecurite,
            'securite' => 'non'
        ]);

        // Envoi de l'e-mail de confirmation avec les détails nécessaires
        Mail::to($recipientEmail)->send(new TentativeConnexionMail($nomPrenom, $ouiSecuriteUrl, $nonSecuriteUrl, $AdresseIp, $typeNavigateur, $typeAppareil, $typeSysteme, $VersionSysteme));


        return true;
            
        
    }



    /**
     * Fonction d'envoie du mail de changement de mot de passe
     *
     * @param \App\Models\Utilisateur $UtilisateurRecuperer
     * @return bool
     */
    public static function TokenPasswordAndSendEmail($UtilisateurCompte)
    {
        // Générer un token unique
        $Idtoken = Str::uuid();
        
        // Générer un token unique de 64 caractères
        $token = Str::random(64);

        // Stocker le token dans la table 'password_reset_tokens'
        DB::table('password_reset_tokens')->insert([
            'id_password_reset_token' => $Idtoken,
            'adresse_email' => $UtilisateurCompte->email, // L'email est déjà crypté dans la base de données
            'token' => $token, // Cryptage du token pour plus de sécurité
            'created_at' => Carbon::now(), // Date actuelle
        ]);
        
        // Déchiffrement de l'adresse e-mail du destinataire
        $recipientEmail = Crypt::decrypt($UtilisateurCompte->email);

        // Déchiffrement du nom et prénom du destinataire
        $nomPrenom = Crypt::decrypt($UtilisateurCompte->nom_prenom);
        
        // Création de l'URL personnalisée de réinitialisation de mot de passe
        $urlPersonnelleMotPasse = route('nouveau-mot-passe', ['TokenSecurite' => $token]) . '?email=' . urlencode($recipientEmail);


        // Envoi de l'e-mail de confirmation avec les détails nécessaires
        Mail::to($recipientEmail)->send(new ChangeMotPasseMail($nomPrenom, $urlPersonnelleMotPasse));

        return true;
    }







    // règle pour le nom prenom
    public static $rulesNomPrenom = [

        'nom_prenom' => 'required|string|regex:/^[\pL\s\-\'.,!?]+$/u|min:2|max:70',
    ];
    
    // règle pour l'adresse mail
    public static $rulesEmail = [

        'email' => 'required|email|max:250',
    ];
    
    // règle pour le mot de passe
    public static $rulesPassword = [

        'password' => 'required|string|same:verifipassword',
    ];
    
    // règle pour le pays
    public static $rulesPays = [

        'nom_correct_pays' => 'nullable|string|max:250',
    ];
    
     // règle pour le ville
    public static $rulesVille = [

        'ville' => 'nullable|string|max:250',
    ];
    
     // règle pour l'adresse
    public static $rulesAdresse = [

        'adresse' => 'nullable|string|max:250',
    ];
    
    // règle pour la règle de confirmation
    public static $rulesRegleConfirme = [

        'regle_confirme' => 'required|in:accepter',
    ];

    // règle pour le numeros
    public static $rulesNumeros = [

        'indicatif_pays' => 'required|string|regex:/^[0-9+]+$/|max:4',
        'numeros_contact' => 'required|string|regex:/^[0-9]+$/|min:8|max:15',
    
    ];
    
    public static $rulesNumerosA = [

        'numeros_contact' => 'nullable|string|regex:/^[0-9+]+$/|max:15',
    
    ];
    
    // règle pour le numeros
    public static $rulesWhatsapp = [

        'whatsapp' => 'nullable|string|regex:/^[0-9+]+$/|max:15',
    
    ];
    
    // règle pour le poste
    public static $rulesPoste = [

        'poste' => 'required|string|regex:/^[\pL\s\-\'.,!?]+$/u|min:2|max:70',
    ];
    
    // règle pour le type d'utilisateur
    public static $rulesTypeUtilisateur = [

        'choix_type_utilisateur' => 'required|in:administrateur,comite,representant',
    ];

    
     
    public static $customNomPrenom = [

        'nom_prenom.required' => 'Le nom et prenom est requis.',
        'nom_prenom.string' => 'Le nom et prenom doit être une chaîne de caractères.',
        'nom_prenom.regex' => 'Le nom et prenom ne peut pas contenir des caractères inconnues',
        'nom_prenom.min' => 'Le nom et prenom doit etre au minimun 2 caractères.',
        'nom_prenom.max' => 'Le nom et prenom ne doit pas dépasser 70 caractères.',

    ];

    public static $customEmail = [
        'email.required' => 'L\'adresse e-mail est requise.',
        'email.email' => 'L\'adresse e-mail doit être valide.',
        'email.max' => 'L\'adresse e-mail ne doit pas dépasser 250max caractères.',

    ];
    
     
    public static $customPassword = [

        'password.required' => 'Le mot de passe est requis.',
        'password.string' => 'Le mot de passe doit être une chaîne de caractères.',
        'password.same' => 'Le mot de passe est différent du mot de passe de confirmation',

    ];

    
    public static $customRegleConfirme = [

        'regle_confirme.required' => "L'acceptation des condition d'utilisation est requis.",
        'regle_confirme.in' => "L'acceptation des condition d'utilisation est obligatoire.",

    ];


    public static $customPays = [

        'nom_correct_pays.string' => 'Le pays doit être une chaîne de caractères.',
        'nom_correct_pays.max' => 'Le pays ne doit pas dépasser 250 caractères.',

    ];
    
    public static $customVille = [

        'ville.string' => 'Le ville doit être une chaîne de caractères.',
        'ville.max' => 'Le ville ne doit pas dépasser 250 caractères.',

    ];
    
     
    public static $customAdresse = [

        'adresse.string' => 'Ladresse doit être une chaîne de caractères.',
        'adresse.max' => 'Ladresse ne doit pas dépasser 250 caractères.',

    ];

    public static $customPoste = [

        'poste.required' => 'Le poste est requis.',
        'poste.string' => 'Le poste doit être une chaîne de caractères.',
        'poste.regex' => 'Le poste ne peut pas contenir des caractères inconnues',
        'poste.min' => 'Le poste doit etre au minimun 2 caractères.',
        'poste.max' => 'Le poste ne doit pas dépasser 70 caractères.',

    ];

    public static $customTypeUtilisateur = [

        'choix_type_utilisateur.required' => "Le type d'utilisateur est requis.",
        'choix_type_utilisateur.in' => "Le type d'utilisateur doit être une chaîne de caractères.",

    ];




    public static $customNumeros = [
        
        'indicatif_pays.required' => "L'indicatif du pays est requis",
        'indicatif_pays.string' => "L'indicatif du pays doit être une chaîne de caractères.",
        'indicatif_pays.regex' => "L'indicatif du pays peut contenir uniquement des chiffres et +",
        'indicatif_pays.max' => "L'indicatif du pays ne doit pas dépasser 4 chiffres.",
    
        'numeros_contact.required' => 'Le numéros de téléphone est requis.',
        'numeros_contact.string' => 'Le numéros de téléphone doit être une chaîne de caractères.',
        'numeros_contact.regex' => 'Le numéros de téléphone doit contenir des chiffres uniquements.',
        'numeros_contact.min' => 'Le numéros de téléphone doit être 8 chiffres au minimun.',
        'numeros_contact.max' => 'Le numéros de téléphone ne doit pas dépasser 15 chiffres.',
    ];

    public static $customNumerosA = [
        
        'numeros_contact.string' => 'Le numéros de téléphone doit être une chaîne de caractères.',
        'numeros_contact.regex' => 'Le numéros de téléphone doit contenir des chiffres uniquements.',
        'numeros_contact.max' => 'Le numéros de téléphone ne doit pas dépasser 15 chiffres.',
    ];

    public static $customWhatsapp = [
        
        'whatsapp.string' => 'Le numéros whatsapp doit être une chaîne de caractères.',
        'whatsapp.regex' => 'Le numéros whatsapp doit contenir des chiffres uniquements.',
        'whatsapp.max' => 'Le numéros whatsapp ne doit pas dépasser 15 chiffres.',
    ];

    
    //pour la connexion
    public static function login($credentials, $remember)
    {
        
        if (Auth::guard('utilisateur')->attempt($credentials, $remember)) {

            // L'authentification a réussi
            return true;
        } else {
            // L'authentification a échoué
            return false;
        }
    }
}
