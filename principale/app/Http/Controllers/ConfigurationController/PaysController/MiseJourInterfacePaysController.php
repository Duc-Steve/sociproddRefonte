<?php

namespace App\Http\Controllers\ConfigurationController\PaysController;

use App\Http\Controllers\Controller;
use App\Models\EnteteDonnees;
use App\Models\Interfaces;
use App\Models\Pays;
use App\Models\Utilisateurs;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Support\Facades\Crypt;

class MiseJourInterfacePaysController extends Controller
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
        
        // Trouver les informations d'entete du pays 
        $DonneeEntete = EnteteDonnees::where('pays_id', $PaysPris->id_pays)->first();


        // Validez les données du formulaire en utilisant les règles de validation du modèle "Pays"
        $dataEntete = $request->validate(Pays::$rulesEntete, Pays::$customEntete);

        
        // Récupérer les fonctionalites sélectionnées
        $fonctionalites = $request->input('fonctionalite', []);

        // Vérification des fonctionalites sélectionnées
        $fonctionalitesChecked = [
            'projet' => in_array('projet', $fonctionalites),
            'actualite' => in_array('actualite', $fonctionalites),
            'podcast' => in_array('podcast', $fonctionalites),
            'reportage' => in_array('reportage', $fonctionalites),
            'membre_executif' => in_array('membre_executif', $fonctionalites),
            'coordonnee' => in_array('coordonnee', $fonctionalites),
            'contact' => in_array('contact', $fonctionalites),
            'newsletter' => in_array('newsletter', $fonctionalites),
            'commentaire' => in_array('commentaire', $fonctionalites)
        ];

        
        // Obtenir la date actuelle pour inclure dans les nom des fichiers existant
        $dateActuelle = Carbon::now()->format('Y_m_d_His');

        // Vérifie la valeur de 'entete_choix' dans le tableau $dataEntete
        if($dataEntete['entete_choix'] == "video") {

            // Si 'entete_choix' est "video", définir le choix de vidéo à "true" et les autres à "false"
            $videoChoix = "true";
            $imageDynamiqueChoix = "false";
            $imageStatiqueChoix = "false";

            // Valider les données du formulaire
            $phraseVideoPreliminaire = $request->validate(EnteteDonnees::$rulesPhraseVideo, EnteteDonnees::$customMessagesPhraseVideo);

            $phraseVideo = Crypt::encrypt($phraseVideoPreliminaire['phrase_video']);

            if ($request->hasFile('video')) {

                $request->validate(EnteteDonnees::$rulesVideo, EnteteDonnees::$customMessagesVideo);

                $fileVideo = $request->file('video');
            
            
                $formatVideo = $fileVideo->getClientOriginalExtension();
            
                // Générer un nom de fichier unique
                $new_file_nameVideoDecrypt = "video_". $PaysPris->nom_url . $dateActuelle .".$formatVideo";
                $new_file_nameVideo = Crypt::encrypt($new_file_nameVideoDecrypt);
    
                // Enregistrer l'image avec un nom personnalisé
                $file_pathVideoDecrypt = $fileVideo->storeAs("/elements", $new_file_nameVideoDecrypt);
                $file_pathVideo = Crypt::encrypt($file_pathVideoDecrypt);
                    
                
                if(!isset($file_pathVideo)) {
    
                    return back()->with('error', "Erreur d'enregistrement de la video");
    
                }

            }else {

                $new_file_nameVideo = $DonneeEntete->nom_video;
                $file_pathVideo = $DonneeEntete->lien_video;
                
            }
            
            $phraseUn = $DonneeEntete->phrase_un;
            $phraseDeux = $DonneeEntete->phrase_deux;
            $phraseTrois = $DonneeEntete->phrase_trois;
            $phraseStatique = $DonneeEntete->phrase_statique;

            $new_file_nameUn = $DonneeEntete->nom_image_dynamique_un;
            $file_pathUn = $DonneeEntete->lien_image_dynamique_un;
            
            $new_file_nameDeux = $DonneeEntete->nom_image_dynamique_deux;
            $file_pathDeux = $DonneeEntete->nom_image_dynamique_deux;
            
            $new_file_nameTrois = $DonneeEntete->nom_image_dynamique_trois;
            $file_pathTrois = $DonneeEntete->nom_image_dynamique_trois;
            
            $new_file_nameStatique = $DonneeEntete->nom_image_statique;
            $file_pathStatique = $DonneeEntete->lien_image_statique;

        } elseif($dataEntete['entete_choix'] == "image_dynamique") {

        
            // Si 'entete_choix' est "image_dynamique", définir le choix d'image dynamique à "true" et les autres à "false"
            $videoChoix = "false";
            $imageDynamiqueChoix = "true";
            $imageStatiqueChoix = "false";

            // Valider les données du formulaire
            $phraseUnPreliminaire = $request->validate(EnteteDonnees::$rulesPhraseUn, EnteteDonnees::$customMessagesPhraseUn);
            $phraseDeuxPreliminaire = $request->validate(EnteteDonnees::$rulesPhraseDeux, EnteteDonnees::$customMessagesPhraseDeux);
            $phraseTroisPreliminaire = $request->validate(EnteteDonnees::$rulesPhraseTrois, EnteteDonnees::$customMessagesPhraseTrois);
        
            
            $phraseUn = Crypt::encrypt($phraseUnPreliminaire['phrase_un']);
            $phraseDeux = Crypt::encrypt($phraseDeuxPreliminaire['phrase_deux']);
            $phraseTrois = Crypt::encrypt($phraseTroisPreliminaire['phrase_trois']);
        
            if ($request->hasFile('image_un')) {

                $request->validate(EnteteDonnees::$rulesImageUn, EnteteDonnees::$customMessagesImageUn);
            
                $fileUn = $request->file('image_un');
            
                $formatUn = $fileUn->getClientOriginalExtension();
            
                // Générer un nom de fichier unique
                $new_file_nameUnDecrypt = "image_dynamique_un_". $PaysPris->nom_url . $dateActuelle .".$formatUn";
                $new_file_nameUn = Crypt::encrypt($new_file_nameUnDecrypt);

                // Enregistrer l'image avec un nom personnalisé
                $file_pathUnDecrypt = $fileUn->storeAs("/elements", $new_file_nameUnDecrypt);
                $file_pathUn = Crypt::encrypt($file_pathUnDecrypt);
                    
                
                if(!isset($file_pathUn)) {

                    return back()->with('error', "Erreur d'enregistrement des images dynamique");

                }

            }else {
                    
                $new_file_nameUn = $DonneeEntete->nom_image_dynamique_un;
                $file_pathUn = $DonneeEntete->lien_image_dynamique_un;
                
            }

            if ($request->hasFile('image_deux')) {

                $request->validate(EnteteDonnees::$rulesImageDeux, EnteteDonnees::$customMessagesImageDeux);
            
                $fileDeux = $request->file('image_deux');
            
                $formatDeux = $fileDeux->getClientOriginalExtension();
            
                // Générer un nom de fichier unique
                $new_file_nameDeuxDecrypt = "image_dynamique_deux_". $PaysPris->nom_url . $dateActuelle .".$formatDeux";
                $new_file_nameDeux = Crypt::encrypt($new_file_nameDeuxDecrypt);

                // Enregistrer l'image avec un nom personnalisé
                $file_pathDeuxDecrypt = $fileDeux->storeAs("/elements", $new_file_nameDeuxDecrypt);
                $file_pathDeux = Crypt::encrypt($file_pathDeuxDecrypt);
                    
                
                if(!isset($file_pathDeux)) {

                    return back()->with('error', "Erreur d'enregistrement des images dynamique");

                }

            }else {
                    
                $new_file_nameDeux = $DonneeEntete->nom_image_dynamique_deux;
                $file_pathDeux = $DonneeEntete->nom_image_dynamique_deux;
                
            }

            if ($request->hasFile('image_trois')) {

                $request->validate(EnteteDonnees::$rulesImageTrois, EnteteDonnees::$customMessagesImageTrois);
            
                $fileTrois = $request->file('image_trois');
            
                $formatTrois = $fileTrois->getClientOriginalExtension();
            
                // Générer un nom de fichier unique
                $new_file_nameTroisDecrypt = "image_dynamique_trois_". $PaysPris->nom_url . $dateActuelle .".$formatTrois";
                $new_file_nameTrois = Crypt::encrypt($new_file_nameTroisDecrypt);

                // Enregistrer l'image avec un nom personnalisé
                $file_pathTroisDecrypt = $fileDeux->storeAs("/elements", $new_file_nameTroisDecrypt);
                $file_pathTrois = Crypt::encrypt($file_pathTroisDecrypt);
                    
                
                if(!isset($file_pathTrois)) {

                    return back()->with('error', "Erreur d'enregistrement des images dynamique");

                }

            }else {
                    
                
                $new_file_nameTrois = $DonneeEntete->nom_image_dynamique_trois;
                $file_pathTrois = $DonneeEntete->nom_image_dynamique_trois;
            }

            $phraseVideo = $DonneeEntete->phrase_video;
            $phraseStatique = $DonneeEntete->phrase_statique;

            $new_file_nameVideo = $DonneeEntete->nom_video;
            $file_pathVideo = $DonneeEntete->lien_video;
            
            $new_file_nameStatique = $DonneeEntete->nom_image_statique;
            $file_pathStatique = $DonneeEntete->lien_image_statique;
            

        } elseif($dataEntete['entete_choix'] == "image_statique") {

            // Si 'entete_choix' est "image_statique", définir le choix d'image statique à "true" et les autres à "false"
            $videoChoix = "false";
            $imageDynamiqueChoix = "false";
            $imageStatiqueChoix = "true";

            // Valider les données du formulaire
            $phraseStatiquePreliminaire = $request->validate(EnteteDonnees::$rulesPhraseStatique, EnteteDonnees::$customMessagesPhraseStatique);
        
            $phraseStatique = Crypt::encrypt($phraseStatiquePreliminaire['phrase_statique']);

            if ($request->hasFile('image_statique')) {

                $request->validate(EnteteDonnees::$rulesImageStatique, EnteteDonnees::$customMessagesImageStatique);
            
                $fileStatique = $request->file('image_statique');
            
            
                $formatStatique = $fileStatique->getClientOriginalExtension();
            
                // Générer un nom de fichier unique
                $new_file_nameStatiqueDecrypt = "image_statique_". $PaysPris->nom_url . $dateActuelle .".$formatStatique";
                $new_file_nameStatique = Crypt::encrypt($new_file_nameStatiqueDecrypt);

                // Enregistrer l'image avec un nom personnalisé
                $file_pathStatiqueDecrypt = $fileStatique->storeAs("/elements", $new_file_nameStatiqueDecrypt);
                $file_pathStatique = Crypt::encrypt($file_pathStatiqueDecrypt);
                    
                
                if(!isset($file_pathStatique)) {

                    return back()->with('error', "Erreur d'enregistrement de l'image statique");

                }
            }else {
                
                $new_file_nameStatique = $DonneeEntete->nom_image_statique;
                $file_pathStatique = $DonneeEntete->lien_image_statique;
            }
            


            $phraseUn = $DonneeEntete->phrase_un;
            $phraseDeux = $DonneeEntete->phrase_deux;
            $phraseTrois = $DonneeEntete->phrase_trois;
            $phraseVideo = $DonneeEntete->phrase_video;
            
            $new_file_nameVideo = $DonneeEntete->nom_video;
            $file_pathVideo = $DonneeEntete->lien_video;
                
            $new_file_nameUn = $DonneeEntete->nom_image_dynamique_un;
            $file_pathUn = $DonneeEntete->lien_image_dynamique_un;
            
            $new_file_nameDeux = $DonneeEntete->nom_image_dynamique_deux;
            $file_pathDeux = $DonneeEntete->nom_image_dynamique_deux;
            
            $new_file_nameTrois = $DonneeEntete->nom_image_dynamique_trois;
            $file_pathTrois = $DonneeEntete->nom_image_dynamique_trois;
            

        } else {

            // Si 'entete_choix' ne correspond à aucune des valeurs ci-dessus, définir tous les choix à "false"
            $videoChoix = "false";
            $imageDynamiqueChoix = "false";
            $imageStatiqueChoix = "false";


            $phraseUn = $DonneeEntete->phrase_un;
            $phraseDeux = $DonneeEntete->phrase_deux;
            $phraseTrois = $DonneeEntete->phrase_trois;
            $phraseVideo = $DonneeEntete->phrase_video;
            $phraseStatique = $DonneeEntete->phrase_statique;
            
            $new_file_nameVideo = $DonneeEntete->nom_video;
            $file_pathVideo = $DonneeEntete->lien_video;
                
            $new_file_nameUn = $DonneeEntete->nom_image_dynamique_un;
            $file_pathUn = $DonneeEntete->lien_image_dynamique_un;
            
            $new_file_nameDeux = $DonneeEntete->nom_image_dynamique_deux;
            $file_pathDeux = $DonneeEntete->nom_image_dynamique_deux;
            
            $new_file_nameTrois = $DonneeEntete->nom_image_dynamique_trois;
            $file_pathTrois = $DonneeEntete->nom_image_dynamique_trois;
            
            $new_file_nameStatique = $DonneeEntete->nom_image_statique;
            $file_pathStatique = $DonneeEntete->lien_image_statique;

        }

            

            //mettre a jours les données de l'interface
            $InterfacePaysRecuperer->video = Crypt::encrypt($videoChoix);
            $InterfacePaysRecuperer->image_dynamique = Crypt::encrypt($imageDynamiqueChoix);
            $InterfacePaysRecuperer->image_statique = Crypt::encrypt($imageStatiqueChoix);
            $InterfacePaysRecuperer->projet = Crypt::encrypt($fonctionalitesChecked['projet']);
            $InterfacePaysRecuperer->actualite = Crypt::encrypt($fonctionalitesChecked['actualite']);
            $InterfacePaysRecuperer->podcast = Crypt::encrypt($fonctionalitesChecked['podcast']);
            $InterfacePaysRecuperer->reportage = Crypt::encrypt($fonctionalitesChecked['reportage']);
            $InterfacePaysRecuperer->membre_executif = Crypt::encrypt($fonctionalitesChecked['membre_executif']);
            $InterfacePaysRecuperer->coordonnee = Crypt::encrypt($fonctionalitesChecked['coordonnee']);
            $InterfacePaysRecuperer->contact = Crypt::encrypt($fonctionalitesChecked['contact']);
            $InterfacePaysRecuperer->newsletter = Crypt::encrypt($fonctionalitesChecked['newsletter']);
            $InterfacePaysRecuperer->commentaire = Crypt::encrypt($fonctionalitesChecked['commentaire']);
            

            //mettre a jours les données de l'en-tête
            $DonneeEntete->phrase_un = $phraseUn;
            $DonneeEntete->nom_image_dynamique_un = $new_file_nameUn;
            $DonneeEntete->lien_image_dynamique_un = $file_pathUn;
            $DonneeEntete->phrase_deux = $phraseDeux;
            $DonneeEntete->nom_image_dynamique_deux = $new_file_nameDeux;
            $DonneeEntete->lien_image_dynamique_deux = $file_pathDeux;
            $DonneeEntete->phrase_trois = $phraseTrois;
            $DonneeEntete->nom_image_dynamique_trois = $new_file_nameTrois;
            $DonneeEntete->lien_image_dynamique_trois = $file_pathTrois;
            $DonneeEntete->phrase_video = $phraseVideo;
            $DonneeEntete->nom_video = $new_file_nameVideo;
            $DonneeEntete->lien_video = $file_pathVideo;
            $DonneeEntete->phrase_statique = $phraseStatique;
            $DonneeEntete->nom_image_statique = $new_file_nameStatique;
            $DonneeEntete->lien_image_statique = $file_pathStatique;

            //enregistrer les données
            if ($InterfacePaysRecuperer->update() && $DonneeEntete->update()) {
                
                // Redirection vers la page précédente avec un message succes
                return back()->with('succes', "Vous venez de mettre à jours l'interface du pays.");

            }else {

                // Redirection vers la page précédente avec un message error
                return back()->with('error', "Une erreur s'est produite pendant la mise à jour.");
            }

        

    }

}
