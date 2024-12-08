<?php

namespace App\Http\Controllers\ConfigurationController\PaysController;

use App\Http\Controllers\Controller;
use App\Models\ProfilesMembreBureauExecutifs;
use App\Models\Projets;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Str;

class MemoriserSousMembreExecutifPaysController extends Controller
{
    //
    
    public function create(Request $request): RedirectResponse|View
    {
        // Récupérer les informations de l'utilisateur connecter envoyées par le middleware
        $UtilisateurConnecter = $request->attributes->get('authenticated_utilisateur');

        // Récupérer les informations du membre envoyées par le middleware
        $PaysPris = $request->attributes->get('IdPaysSuccess');
        
        // Récupérer les informations du membre envoyées par le middleware
        $InterfacePaysRecuperer = $request->attributes->get('InterfacePays');

        // Validez les données du formulaire en utilisant les règles de validation du modèle "ProfilesMembreBureauExecutifs"
        $dataNomPrenom = $request->validate(ProfilesMembreBureauExecutifs::$rulesNomPrenom, ProfilesMembreBureauExecutifs::$customNomPrenom);
        $dataDescription = $request->validate(ProfilesMembreBureauExecutifs::$rulesDescription, ProfilesMembreBureauExecutifs::$customDescription);
        $dataEmail = $request->validate(ProfilesMembreBureauExecutifs::$rulesEmail, ProfilesMembreBureauExecutifs::$customEmail);
        $dataPoste = $request->validate(ProfilesMembreBureauExecutifs::$rulesPoste, ProfilesMembreBureauExecutifs::$customPoste);

        // Obtenir la date actuelle pour inclure dans les nom des fichiers existant
        $dateActuelle = Carbon::now()->format('Y_m_d_His');

        // Générer un token de 64 caractères
        $token = Str::random(64);
        
        //Verifier si l'adresse mail existe déjà
        $verifieEmmail = ProfilesMembreBureauExecutifs::where('email', $dataEmail['email'])->first();
        
        // si oui
        if(!empty($verifieEmmail)) {
            
            return back()->with('error', "L'adresse mail existe déjà");
        }


        // Vérifiez s'il existe une image
        if ($request->hasFile('image')) {
            

            // Valider les données du formulaire
            $request->validate(ProfilesMembreBureauExecutifs::$rulesImage, ProfilesMembreBureauExecutifs::$customImage);
            
                
            $file = $request->file('image');
        
            $format = $file->getClientOriginalExtension();
        
            // Générer un nom de fichier unique pour le premier fichier PDF
            $new_file_name = "image_membre" . $dateActuelle . ".$format";

            // Enregistrer l'image avec un nom personnalisé
            $file_path = $file->storeAs("/elements/images", $new_file_name);
                
            
            if(!isset($file_path)) {

                return back()->with('error', "Erreur d'enregistrement de l'image");

            }
            
            
        }else {
            $file_path = null;
            $new_file_name = null;
        }

       
        
        // Mémoriser le profile
        $newMembreProfilePays = ProfilesMembreBureauExecutifs::create([
            'nom_prenom' => Crypt::encrypt($dataNomPrenom['nom_prenom']),
            'nom_photo' => Crypt::encrypt($new_file_name),
            'lien_photo' => Crypt::encrypt($file_path),
            'email' => $dataEmail['email'],
            'poste' => Crypt::encrypt($dataPoste['poste']),
            'petit_message' => Crypt::encrypt($dataDescription['description']),
            'url_facebook' => Crypt::encrypt(null),
            'url_twitter' => Crypt::encrypt(null),
            'url_portefolio' => Crypt::encrypt(null),
            'url_linkedin' => Crypt::encrypt(null),
            'token_gestion' => $token,
            'pays_id' => $InterfacePaysRecuperer->pays_id,
            'utilisateur_id' => $UtilisateurConnecter->id_utilisateur
        ]);

       
        
        // Envoyer un email à l'utilisateur
        if($newMembreProfilePays->GestionProfileAndSendEmail($newMembreProfilePays)){

           // Redirection vers la page qu'il faut avec un message de succes
            return redirect()->route('gestion-sous-membres-executif', ['IdPays' => $InterfacePaysRecuperer->pays_id])->with('succes', 'Vous venez d\'enregistrer un profil de sous-membre');

        }else {
            
            //supprimer l'enregistrement
            $newMembreProfilePays->delete();
             
            return back()->with('error', 'Une erreur est survenue');
             
        }

    }
}
