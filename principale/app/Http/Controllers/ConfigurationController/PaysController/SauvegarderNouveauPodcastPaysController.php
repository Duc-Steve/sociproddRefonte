<?php

namespace App\Http\Controllers\ConfigurationController\PaysController;

use App\Http\Controllers\Controller;
use App\Models\commentaires;
use App\Models\Pays;
use App\Models\Podcasts;
use App\Models\Utilisateurs;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Illuminate\Support\Facades\Crypt;


class SauvegarderNouveauPodcastPaysController extends Controller
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


        // Vérifier que le fichier audio est présent dans la requête
        if (!$request->hasFile('audio') || !$request->file('audio')->isValid()) {
            
            return back()->with('error', "Le fichier audio est invalide ou absent.");
        }else {
            // Validez les données du formulaire en utilisant les règles de validation du modèle "Podcasts"
            $dataAudio = $request->validate(Podcasts::$rulesAudio, Podcasts::$customAudio);
                
        }


        // Obtenir la date actuelle pour inclure dans les nom des fichiers existant
        $dateActuelle = Carbon::now()->format('Y_m_d_His');
        
        // Vérifiez s'il existe une Description
        if (!empty($request->input('description'))) {

            // Valider les données du formulaire
            $DescriptionChop = $request->validate(Podcasts::$rulesDescription, Podcasts::$customDescription);
            
            $dataDescription =  $DescriptionChop['description'];
            
        }else {
            $dataDescription = null;
        }

        $file = $request->file('audio');
        $format = $file->getClientOriginalExtension();

        // Générer un nom de fichier unique pour le fichier audio
        $new_file_name = "audio_element_" . $ElementPaysRecuperer->type_element . "_" . $dateActuelle . ".$format";

        // Enregistrer le fichier audio avec un nom personnalisé
        $file_path = $file->storeAs("elements/audios", $new_file_name);

        // Vérifier si le fichier a été correctement enregistré
        if (!$file_path) {
            return back()->with('error', "Erreur d'enregistrement du fichier audio");
        }



        //condition très rigoureuse
        try {
            
            // Mémoriser l'élément
            $newPodcatsPays = Podcasts::create([
                'description' => Crypt::encrypt($dataDescription),
                'nom_audio' => Crypt::encrypt($new_file_name),
                'lien_audio' => Crypt::encrypt($file_path),
                'element_id' => $ElementPaysRecuperer->id_element,
                'utilisateur_id' => $UtilisateurConnecter->id_utilisateur,
            ]);

        
            // Redirection vers la page qu'il faut avec un message de succes
            return back()->with('succes', "Vous venez d'enregistrer un podcast");


        } catch (\Exception $e) {

            // Redirection vers la page précédente avec un message d'erreur si une exception est lancée
            return back()->with('error', 'Une erreur est survenue : ' /*. $e->getMessage()*/);
        }
    }
}
