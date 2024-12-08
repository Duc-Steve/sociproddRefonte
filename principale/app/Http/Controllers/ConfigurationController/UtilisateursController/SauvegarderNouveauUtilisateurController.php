<?php

namespace App\Http\Controllers\ConfigurationController\UtilisateursController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Support\Facades\Crypt;


use App\Models\Pays;
use App\Models\Utilisateurs;
use Carbon\Carbon;

class SauvegarderNouveauUtilisateurController extends Controller
{
    //
    
    public function create(Request $request): RedirectResponse|View
    {
        // Récupérer les informations de l'utilisateur connecter envoyées par le middleware
        $UtilisateurConnecter = $request->attributes->get('authenticated_utilisateur');


        // Validez les données du formulaire en utilisant les règles de validation du modèle "Utilisateurs"
        $dataUser = $request->validate(Utilisateurs::$rulesNomPrenom, Utilisateurs::$customNomPrenom);
        $dataEmail = $request->validate(Utilisateurs::$rulesEmail, Utilisateurs::$customEmail);
        $dataNumeros = $request->validate(Utilisateurs::$rulesNumeros, Utilisateurs::$customNumeros);
        $dataPoste = $request->validate(Utilisateurs::$rulesPoste, Utilisateurs::$customPoste);
        $dataTypeUtilisateur = $request->validate(Utilisateurs::$rulesTypeUtilisateur, Utilisateurs::$customTypeUtilisateur);
        
        // Extraire le domaine de l'adresse e-mail
        $domain = substr(strrchr($dataEmail['email'], "@"), 1);
        
        // Vérifier si le domaine est égal à 'sociprodd.org'
        if ($domain != 'sociprodd.org') {
            
            return back()->with('error', "Le domaine de l'adresse e-mail n'est pas sociprodd.org");
        }

        // Supprimer les espaces
        $Indicatif = str_replace(' ', '', $dataNumeros['indicatif_pays']);
        $Numeros = str_replace(' ', '', $dataNumeros['numeros_contact']);
        
        //formation du numeros de telephone avec indicatif
        $numerosFinale = $Indicatif . $Numeros;

        if(!empty($request->input('pays_id'))) {

            // Valider les données du formulaire
            $request->validate([
                'pays_id' => 'required|string|max:250',
            ], [
                'pays_id.required' => 'Le pays à associer est requise.',
                'pays_id.string' => 'Le pays à associer doit être valide.',
                'pays_id.max' => 'Le pays à associer ne doit pas dépasser maximun 250 caractères.',
            ]);

            $paysAssocier = $request->input('pays_id');
            
            //verifier l'existence du Pays
            $existencePays = Pays::where('id_pays', $paysAssocier)->first();
            
            if(!isset($existencePays)) {
                
                // Si le pays n'existe, afficher une erreur et rediriger
                return back()->with('error', "Le pays n'existe pas");
            }
            
            $nomPays = Crypt::decrypt($existencePays->nom_normale);
            
        }else {

            $paysAssocier = null;
            $nomPays = null;
        }

        // Récupération de l'année actuelle
        $dateAnnee = date('Y');

        // Génération d'un chiffre aléatoire à 6 chiffres pour le matricule
        $chiffre_aleatoire = rand(100000, 999999);

        // Détermination de la caractéristique en fonction du type d'utilisateur sélectionné
        if ($dataTypeUtilisateur['choix_type_utilisateur'] == "administrateur") {
            
            // Caractéristique pour les administrateurs
            $caracteristique = "A-U";

        } elseif ($dataTypeUtilisateur['choix_type_utilisateur'] == "comite") {

            // Caractéristique pour les comités
            $caracteristique = "C-U";

        } elseif ($dataTypeUtilisateur['choix_type_utilisateur'] == "representant") {

            // Caractéristique pour les utilisateurs réguliers
            $caracteristique = "R-U";   

        }

        // Construction du matricule en concaténant la caractéristique, l'année et le chiffre aléatoire
        $Matricule = $caracteristique . $dateAnnee . $chiffre_aleatoire;


        //condition très rigoureuse
        //try {
            
        
            // Récupérer tous les comptes utilisateurs existants
            $toutcomptes = Utilisateurs::all();

            // Parcourir chaque compte utilisateur existant
            foreach ($toutcomptes as $toutcompte) {
                // Décrypter l'email de chaque compte utilisateur
                $mailconn = Crypt::decrypt($toutcompte->email);

                // Vérifier si $mailconn correspond à l'email du formulaire
                if (isset($mailconn) && $mailconn == $dataEmail['email']) {
                    // Si une correspondance est trouvée, afficher une erreur et rediriger
                    return back()->with('error', 'Un utilisateur existe déjà avec le même email');
                }
            }

            // Créer un nouveau compte utilisateur
            $newUtilisateur = Utilisateurs::create([
                'matricule' => Crypt::encrypt($Matricule),
                'nom_prenom' => Crypt::encrypt($dataUser['nom_prenom']), 
                'pays' => Crypt::encrypt($nomPays),
                'ville' => Crypt::encrypt(null),
                'adresse' => Crypt::encrypt(null),
                'sexe' => Crypt::encrypt(null),
                'email' => Crypt::encrypt($dataEmail['email']),
                'numeros' => Crypt::encrypt($numerosFinale),
                'whatsapp' => Crypt::encrypt(null),
                'nom_dossier' => Crypt::encrypt(null),
                'lien_dossier' => Crypt::encrypt(null),
                'password' => bcrypt($dateAnnee),
                'date_password' => Crypt::encrypt(Carbon::now()->toDateTimeString()), 
                'type_utilisateur' => $dataTypeUtilisateur['choix_type_utilisateur'],
                'poste' => Crypt::encrypt($dataPoste['poste']),
                'pays_id' => $paysAssocier,
                'utilisateur_id' => $UtilisateurConnecter->id_utilisateur
            ]);

        
           
            // générez et envoyez le code OTP
            if ($newUtilisateur->ConfirmationAndPasswordAndSendEmail($newUtilisateur, $dateAnnee)) {

                // Redirection vers la page précédente avec un message de succes
                return back()->with('succes', 'Le compte à été créer avec succès.');

            }else {

                //supprimer le compte de l'utilisateur
                $newUtilisateur->delete();

                // Redirection vers la page précédente avec un message de erreur
                return back()->with('error', "Erreur s'est produite l'Hors de l'envoie du mail de confirmation.");
                
            }



       /* } catch (\Exception $e) {
            
            //supprimer le compte de l'utilisateur
            $newUtilisateur->delete();

            // Redirection vers la page précédente avec un message d'erreur si une exception est lancée
            return back()->with('error', 'Une erreur est survenue : ' . $e->getMessage());
        }*/
        
    }
}
