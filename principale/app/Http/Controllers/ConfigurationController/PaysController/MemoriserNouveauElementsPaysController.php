<?php

namespace App\Http\Controllers\ConfigurationController\PaysController;

use App\Http\Controllers\Controller;
use App\Models\Elements;
use App\Models\Projets;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Support\Facades\Crypt;

class MemoriserNouveauElementsPaysController extends Controller
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

        // Validez les données du formulaire en utilisant les règles de validation du modèle "Elements"
        $dataTitre = $request->validate(Elements::$rulesTitre, Elements::$customTitre);
        $dataDescription = $request->validate(Elements::$rulesDescription, Elements::$customDescription);
        $dataTypeElement = $request->validate(Elements::$rulesTypeElement, Elements::$customTypeElement);
        
        // Obtenir la date actuelle pour inclure dans les nom des fichiers existant
        $dateActuelle = Carbon::now()->format('Y_m_d_His');

        if ($dataTypeElement['choix_type_element'] == "projet") {
    
            $dataStatut = $request->validate(Projets::$rulesStatut, Projets::$customStatut);
            $dataTypeProjet = $request->validate(Projets::$rulesType, Projets::$customType);

            $StatutProjet = $dataStatut['statut_projet'];
            $TypeProjet = $dataTypeProjet['type_projet'];

        }else {
            $StatutProjet = null;
            $TypeProjet = null;
        }


        // Vérifiez s'il existe une video
        if (!empty($request->input('video'))) {

            // Valider les données du formulaire
            $videoChop = $dataVideo = $request->validate(Elements::$rulesVideo, Elements::$customVideo);
            
            $dataVideo =  $videoChop['video'];
            
        }else {
            $dataVideo = null;
        }

        // Vérifiez s'il existe une image
        if ($request->hasFile('image')) {
            

            // Valider les données du formulaire
            $request->validate(Elements::$rulesImage, Elements::$customImage);
            
                
            $file = $request->file('image');
        
            $format = $file->getClientOriginalExtension();
        
            // Générer un nom de fichier unique pour le premier fichier PDF
            $new_file_name = "image_element_". $dataTypeElement['choix_type_element'] . $dateActuelle . ".$format";

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
        //try {
            
            // Mémoriser l'élément
            $newElementPays = Elements::create([
                'reference_unique' => Crypt::encrypt($dateActuelle),
                'titre' => Crypt::encrypt($dataTitre['titre']),
                'petite_description' => Crypt::encrypt($dataDescription['description']), 
                'nom_photos' => Crypt::encrypt($new_file_name),
                'lien_photos' => Crypt::encrypt($file_path),
                'lien_video' => Crypt::encrypt($dataVideo),
                'type_element' => $dataTypeElement['choix_type_element'],
                'pays_id' => $InterfacePaysRecuperer->pays_id,
                'utilisateur_id' => $UtilisateurConnecter->id_utilisateur,
                'validateur_id' => null
            ]);

        
            if($dataTypeElement['choix_type_element'] == "projet") {

                // Mémoriser le projet
                $newProjetPays = Projets::create([
                    'description' => Crypt::encrypt(null),
                    'nom_pdf' => Crypt::encrypt(null),
                    'lien_pdf' => Crypt::encrypt(null), 
                    'type_projet' => $TypeProjet,
                    'utilisateur_id' => $UtilisateurConnecter->id_utilisateur,
                    'element_id' => $newElementPays->id_element,
                    'statut_projet' => $StatutProjet
                ]);

                if(!$newProjetPays) {

                    //supprimer l'élément
                    $newElementPays->delete();
                    
                    return back()->with('error', 'Une erreur est survenue');
                }
          
                // Redirection vers la page qu'il faut avec un message de succes
                return redirect()->route('contenu-elements', ['IdPays' => $InterfacePaysRecuperer->pays_id])->with('succes', "Vous venez d'enregistrer un élément pour le pays ( " . Crypt::decrypt($PaysPris->nom_normale) . " )");


            }
                    
            // Redirection vers la page qu'il faut avec un message de succes
            return redirect()->route('contenu-elements', ['IdPays' => $InterfacePaysRecuperer->pays_id])->with('succes', "Vous venez d'enregistrer un élément pour le pays ( " . Crypt::decrypt($PaysPris->nom_normale) . " )");


        /*} catch (\Exception $e) {

            // Redirection vers la page précédente avec un message d'erreur si une exception est lancée
            return back()->with('error', 'Une erreur est survenue : ' . $e->getMessage());
        }*/
    }

}
