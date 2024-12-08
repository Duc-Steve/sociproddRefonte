<?php

namespace App\Http\Controllers\ComitesController\InterfaceController\PaysController;

use App\Http\Controllers\Controller;
use App\Models\Coordonnees;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Support\Facades\Crypt;
use Carbon\Carbon;


class MiseJourCoordonneePaysController extends Controller
{
    //
    public function update(Request $request): RedirectResponse|View
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

        //condition très rigoureuse
        try {

            // Récupérer les coordonnees du pays
            $PaysCoordonneeInfo = Coordonnees::where('pays_id', $PaysPris->id_pays)->first();
            
            if(isset($PaysCoordonneeInfo)) {
                
                          
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
                    $file_path = Crypt::decrypt($PaysCoordonneeInfo->image_carte_pays);
                }

                
                $PaysCoordonneeInfo->telephone = Crypt::encrypt($dataSimple['numeros_contact']);
                $PaysCoordonneeInfo->fixe = Crypt::encrypt($dataFixe['numeros_fixe']);
                $PaysCoordonneeInfo->adresse_mail = Crypt::encrypt($dataEmail['email']);
                $PaysCoordonneeInfo->longitude = Crypt::encrypt($dataAdresse['longitude']);
                $PaysCoordonneeInfo->latitude = Crypt::encrypt($dataAdresse['latitude']);
                $PaysCoordonneeInfo->localisation = Crypt::encrypt($dataAdresse['localisation']);
                $PaysCoordonneeInfo->url_facebook = Crypt::encrypt($dataUrl['url_facebook']);
                $PaysCoordonneeInfo->url_twitter = Crypt::encrypt($dataUrl['url_twitter']);
                $PaysCoordonneeInfo->url_youtube = Crypt::encrypt($dataUrl['url_youtube']);
                $PaysCoordonneeInfo->url_tiktok = Crypt::encrypt($dataUrl['url_tiktok']);
                $PaysCoordonneeInfo->url_linkedin = Crypt::encrypt($dataUrl['url_linkedin']);
                $PaysCoordonneeInfo->url_chaine_whatsapp = Crypt::encrypt($dataUrl['url_chaine_whatsapp']);
                $PaysCoordonneeInfo->image_carte_pays = Crypt::encrypt($file_path);
                
        
                // enregistrer la mise à jour
                $PaysCoordonneeInfo->update();

                // Redirection vers la page qu'il faut avec un message de succes
                return back()->with('succes', "Vous venez de mettre à jour les coordonnées du pays avec succès.");

            }else {

                return back()->with('error', "Une erreur est survenue pendant la mise à jour");

            }



        } catch (\Exception $e) {

            // Redirection vers la page précédente avec un message d'erreur si une exception est lancée
            return back()->with('error', 'Une erreur est survenue : ' /*. $e->getMessage()*/);
        }

    }
}
