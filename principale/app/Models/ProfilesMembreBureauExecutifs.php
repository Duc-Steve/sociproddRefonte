<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;


use Illuminate\Support\Facades\Mail;
// mail
use App\Mail\ComiteMail\GestionMail\ProfileSBEMail;

class ProfilesMembreBureauExecutifs extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'profiles_membre_bureau_executifs';
    protected $primaryKey = 'id_profile_membre_bureau_executif';
    protected $fillable = [
        'nom_prenom',
        'email',
        'nom_photo',
        'lien_photo',
        'poste',
        'petit_message',
        'url_facebook',
        'url_twitter',
        'url_portefolio',
        'url_linkedin',
        'token_gestion',
        'pays_id',
        'utilisateur_id',
        'statut_profile_membre_bureau_executif',
    ];




    /**
     * Fonction pour envoyer un e-mail contenant le lien de gestion du profil
     *
     * @param \App\Models\Utilisateur $profileCompte Le compte utilisateur pour lequel envoyer l'e-mail
     * @return bool Retourne true si l'e-mail a été envoyé avec succès
     */
    public static function GestionProfileAndSendEmail($profileCompte)
    {
        // Déchiffrement de l'adresse e-mail du destinataire
        $recipientEmail = $profileCompte->email;
    
        // Déchiffrement du nom et prénom du destinataire
        $nomPrenom = Crypt::decrypt($profileCompte->nom_prenom);
    
        // Génération de l'URL de gestion du profil avec l'adresse e-mail et un jeton de gestion comme paramètres
        $confirmationUrl = route('gestion-profile', [
            'Email' => $recipientEmail,
            'TokenGestion' => $profileCompte->token_gestion
        ]);
    
        // Envoi de l'e-mail de gestion de profil avec les détails nécessaires
        Mail::to($recipientEmail)->send(new ProfileSBEMail($nomPrenom, $confirmationUrl));
    
        // Retourner true pour indiquer que l'e-mail a été envoyé
        return true;
    }




    public static $rulesFacebook = [
        'url_facebook' => 'nullable|url|max:255',
    ];
    
    public static $rulesTwitter = [
        'url_twitter' => 'nullable|url|max:255',
    ];
    
    public static $rulesPortefolio = [
        'url_portefolio' => 'nullable|url|max:255',
    ];
    
    public static $rulesLinkedIn = [
        'url_linkedin' => 'nullable|url|max:255',
    ];


    public static $customFacebook = [
        'url_facebook.url' => 'L\'URL Facebook doit être une URL valide.',
        'url_facebook.max' => 'L\'URL Facebook ne doit pas dépasser 255 caractères.',
    ];
    
    public static $customTwitter = [
        'url_twitter.url' => 'L\'URL Twitter doit être une URL valide.',
        'url_twitter.max' => 'L\'URL Twitter ne doit pas dépasser 255 caractères.',
    ];
    
    public static $customPortefolio = [
        'url_portefolio.url' => 'L\'URL Portefolio doit être une URL valide.',
        'url_portefolio.max' => 'L\'URL Portefolio ne doit pas dépasser 255 caractères.',
    ];
    
    public static $customLinkedIn = [
        'url_linkedin.url' => 'L\'URL LinkedIn doit être une URL valide.',
        'url_linkedin.max' => 'L\'URL LinkedIn ne doit pas dépasser 255 caractères.',
    ];

    // règle pour le nom prenom
    public static $rulesNomPrenom = [

        'nom_prenom' => 'required|string|regex:/^[\pL\s\-\'.,!?]+$/u|min:2|max:70',
    ];
    
    // règle pour le poste
    public static $rulesPoste = [

        'poste' => 'required|string|max:150',
    ];

     
    // règle pour l'adresse mail
    public static $rulesEmail = [

        'email' => 'required|email|max:250',
    ];

    
    // règle pour l'image
    public static $rulesImage = [
    
        'image' => 'required|file|max:10240|mimetypes:image/jpeg,image/png,image/webp', // Limite à 10 Mo (1024 Ko * 10),
    ];

    // règle pour la description
    public static $rulesDescription = [

        'description' => 'required|string|max:300',
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
    
    
    public static $customPoste = [

        'poste.required' => 'Le poste est requis.',
        'poste.string' => 'Le poste doit être une chaîne de caractères.',
        'poste.max' => 'Le poste ne doit pas dépasser 150 caractères.',

    ];
    
    public static $customImage = [
        'image.required' => 'Le champ image est obligatoire.',
        'image.file' => 'Le champ doit être un fichier.',
        'image.max' => 'Le fichier ne doit pas dépasser 10 Mo.',
        'image.mimetypes' => 'Le fichier doit être de type : jpeg, jpg, png, webp.',
    ];
    
     
    public static $customDescription = [

        'description.required' => 'La description est requis.',
        'description.string' => 'La description doit être une chaîne de caractères.',
        'description.max' => 'La description ne doit pas dépasser 300 caractères.',

    ];
}
