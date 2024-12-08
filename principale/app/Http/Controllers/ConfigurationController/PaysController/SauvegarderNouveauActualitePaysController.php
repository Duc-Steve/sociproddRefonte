<?php

namespace App\Http\Controllers\ConfigurationController\PaysController;

use App\Http\Controllers\Controller;
use App\Models\Actualites;
use App\Models\commentaires;
use App\Models\Reportages;
use App\Models\Pays;
use App\Models\Utilisateurs;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Illuminate\Support\Facades\Crypt;

class SauvegarderNouveauActualitePaysController extends Controller
{
    //
    public function create(Request $request): RedirectResponse|View
    {
        
        // Récupérer les informations de l'utilisateur connecter envoyées par le middleware
        $UtilisateurConnecter = $request->attributes->get('authenticated_utilisateur');

        // Récupérer les informations du pays envoyées par le middleware
        $PaysPris = $request->attributes->get('IdPaysSuccess');
        
        // Récupérer les informations de l'interface pays envoyées par le middleware
        $InterfacePaysRecuperer = $request->attributes->get('InterfacePays');
        
        // Récupérer les informations de l'élément envoyées par le middleware
        $ElementPaysRecuperer = $request->attributes->get('IdElementSuccess');

        // Obtenir la date actuelle pour inclure dans les nom des fichiers existant
        $dateActuelle = Carbon::now()->format('Y_m_d_His');

      
        // Valider les données du formulaire
        $dataDescription = $request->validate(Reportages::$rulesDescription, Reportages::$customDescription);
        
        
        // Vérifiez s'il existe une video
        if ($request->hasFile('image')) {
            

            // Valider les données du formulaire
            $request->validate(Actualites::$rulesImage, Actualites::$customImage);
            
                
            $file = $request->file('image');
        
            $format = $file->getClientOriginalExtension();
        
            // Générer un nom de fichier unique pour le premier fichier PDF
            $new_file_name = "image_actualite_" . $dateActuelle . ".$format";

            // Enregistrer l'image avec un nom personnalisé
            $file_path = $file->storeAs("/elements/images", $new_file_name);
                
            
            if(!isset($file_path)) {

                return back()->with('error', "Erreur d'enregistrement de l'image");

            }
            
            
        }else {
            $file_path = null;
            $new_file_name = null;
        }
        
      

        //condition très rigoureuse
        try {
            
            // Mémoriser l'élément
            $newActualitePays = Actualites::create([
                'description' => Crypt::encrypt($dataDescription['description']),
                'nom_photos' => Crypt::encrypt($new_file_name),
                'lien_photos' => Crypt::encrypt($file_path),
                'element_id' => $ElementPaysRecuperer->id_element,
                'utilisateur_id' => $UtilisateurConnecter->id_utilisateur,
            ]);

        
            // Redirection vers la page qu'il faut avec un message de succes
            return back()->with('succes', "Vous venez d'enregistrer une actualite");


        } catch (\Exception $e) {

            // Redirection vers la page précédente avec un message d'erreur si une exception est lancée
            return back()->with('error', 'Une erreur est survenue : ' /*. $e->getMessage()*/);
        }
    }
}
