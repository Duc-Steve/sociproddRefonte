<?php

namespace App\Http\Controllers\ComitesController\InterfaceController\PaysController;

use App\Http\Controllers\Controller;
use App\Models\Coordonnees;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Support\Facades\Crypt;
use Carbon\Carbon;

class EnregistrerNouveauCoordonneeController extends Controller
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

        // Validez les données du formulaire en utilisant les règles de validation du modèle "Coordonnees"
        $dataSimple = $request->validate(Coordonnees::$rulesNumerosSimple, Coordonnees::$customNumerosSimple);
        $dataFixe = $request->validate(Coordonnees::$rulesNumerosFixe, Coordonnees::$customNumerosFixe);
        $dataEmail = $request->validate(Coordonnees::$rulesEmail, Coordonnees::$customEmail);
        $dataAdresse = $request->validate(Coordonnees::$rulesAdresse, Coordonnees::$customAdresse);
        $dataUrl = $request->validate(Coordonnees::$rulesUrl, Coordonnees::$customUrl);
        
        // Obtenir la date actuelle pour inclure dans les nom des fichiers existant
        $dateActuelle = Carbon::now()->format('Y_m_d_His');
        
        // Vérifiez s'il existe une image
        if ($request->hasFile('image_carte_pays')) {
            

            // Valider les données du formulaire
            $request->validate(Coordonnees::$rulesImage, Coordonnees::$customImage);
    
        
            $file = $request->file('image_carte_pays');
        
            $format = $file->getClientOriginalExtension();
        
            // Générer un nom de fichier unique pour le premier fichier PDF
            $new_file_name = "carte_pays" . $dateActuelle . ".$format";

            // Enregistrer l'image avec un nom personnalisé
            $file_path = $file->storeAs("/elements/images", $new_file_name);
                
            
            if(!isset($file_path)) {

                return back()->with('error', "Erreur d'enregistrement de l'image");

            }
            
            
        }else {
            return back()->with('error', "Aucune image de carte n'existe");
        }

        
        //condition très rigoureuse
        try {
            
            // Créer un nouveau compte de coordonnee
            $newCoordonneePays = Coordonnees::create([
                'telephone' => Crypt::encrypt($dataSimple['numeros_contact']),
                'fixe' => Crypt::encrypt($dataFixe['numeros_fixe']), 
                'adresse_mail' => Crypt::encrypt($dataEmail['email']),
                'longitude' => Crypt::encrypt($dataAdresse['longitude']),
                'latitude' => Crypt::encrypt($dataAdresse['latitude']),
                'localisation' => Crypt::encrypt($dataAdresse['localisation']),
                'url_facebook' => Crypt::encrypt($dataUrl['url_facebook']),
                'url_twitter' => Crypt::encrypt($dataUrl['url_twitter']),
                'url_youtube' => Crypt::encrypt($dataUrl['url_youtube']),
                'url_tiktok' => Crypt::encrypt($dataUrl['url_tiktok']),
                'url_linkedin' => Crypt::encrypt($dataUrl['url_linkedin']),
                'url_chaine_whatsapp' => Crypt::encrypt($dataUrl['url_chaine_whatsapp']),
                'image_carte_pays' => Crypt::encrypt($file_path),
                'pays_id' => $InterfacePaysRecuperer->pays_id,
                'utilisateur_id' => $UtilisateurConnecter->id_utilisateur
            ]);

        
            // Redirection vers la page qu'il faut avec un message de succes
            return redirect()->route('nos-coordonnees', ['IdPays' => $InterfacePaysRecuperer->pays_id])->with('succes', "Vous venez d'enregistrer les coordonnées du pays avec succès.");


        } catch (\Exception $e) {

            // Redirection vers la page précédente avec un message d'erreur si une exception est lancée
            return back()->with('error', 'Une erreur est survenue : ' /*. $e->getMessage()*/);
        }

    }

}
