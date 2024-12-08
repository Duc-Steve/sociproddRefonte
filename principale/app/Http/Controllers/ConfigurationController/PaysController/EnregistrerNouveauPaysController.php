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

class EnregistrerNouveauPaysController extends Controller
{
    //
    public function create(Request $request): RedirectResponse|View
    {
        // Récupérer les informations de l'utilisateur connecter envoyées par le middleware
        $UtilisateurConnecter = $request->attributes->get('authenticated_utilisateur');


        // Validez les données du formulaire en utilisant les règles de validation du modèle "Pays"
        $dataPays = $request->validate(Pays::$rulesCreation, Pays::$customCreation);
        $dataEntete = $request->validate(Pays::$rulesEntete, Pays::$customEntete);
        $dataCode = $request->validate(Pays::$rulesCode, Pays::$customCode);

        
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

        // Supprimer les accents, les espaces, les apostrophes, les tirets, les underscores, etc. et mettre en minuscules
        $PaysUrl = strtolower(
            preg_replace(
                '/[^a-zA-Z]/', 
                '-', 
                trim(
                    preg_replace(
                        '/\s*\(.*?\)\s*/', 
                        '', 
                        $this->remove_accents($dataPays['nom_correct_pays'])
                    )
                )
            )
        );


        // Obtenir la date actuelle pour inclure dans les nom des fichiers existant
        $dateActuelle = Carbon::now()->format('Y_m_d_His');

            // Vérifie la valeur de 'entete_choix' dans le tableau $dataEntete
        if($dataEntete['entete_choix'] == "video") {

            // Si 'entete_choix' est "video", définir le choix de vidéo à "true" et les autres à "false"
            $videoChoix = "true";
            $imageDynamiqueChoix = "false";
            $imageStatiqueChoix = "false";

            // Valider les données du formulaire
            $request->validate(EnteteDonnees::$rulesVideo, EnteteDonnees::$customMessagesVideo);
            $phraseVideoPreliminaire = $request->validate(EnteteDonnees::$rulesPhraseVideo, EnteteDonnees::$customMessagesPhraseVideo);
        
            $phraseVideo = $phraseVideoPreliminaire['phrase_video'];
            
            $fileVideo = $request->file('video');
        
        
            $formatVideo = $fileVideo->getClientOriginalExtension();
        
            // Générer un nom de fichier unique
            $new_file_nameVideo = "video_". $PaysUrl . $dateActuelle .".$formatVideo";

            // Enregistrer l'image avec un nom personnalisé
            $file_pathVideo = $fileVideo->storeAs("/elements/videos", $new_file_nameVideo);
                
            
            if(!isset($file_pathVideo)) {

                return back()->with('error', "Erreur d'enregistrement de la video");

            }

            
            $phraseUn = null;
            $phraseDeux = null;
            $phraseStatique = null;

            $new_file_nameUn = null;
            $new_file_nameDeux = null;
            $new_file_nameStatique = null;

            $file_pathUn = null;
            $file_pathDeux = null;
            $file_pathStatique = null;

            $phraseTrois = null;
            $new_file_nameTrois = null;
            $file_pathTrois = null;

        } elseif($dataEntete['entete_choix'] == "image_dynamique") {

        
            // Si 'entete_choix' est "image_dynamique", définir le choix d'image dynamique à "true" et les autres à "false"
            $videoChoix = "false";
            $imageDynamiqueChoix = "true";
            $imageStatiqueChoix = "false";

            // Valider les données du formulaire
            $phraseUnPreliminaire = $request->validate(EnteteDonnees::$rulesPhraseUn, EnteteDonnees::$customMessagesPhraseUn);
            $phraseDeuxPreliminaire = $request->validate(EnteteDonnees::$rulesPhraseDeux, EnteteDonnees::$customMessagesPhraseDeux);
            $phraseTroisPreliminaire = $request->validate(EnteteDonnees::$rulesPhraseTrois, EnteteDonnees::$customMessagesPhraseTrois);
            $request->validate(EnteteDonnees::$rulesImageUn, EnteteDonnees::$customMessagesImageUn);
            $request->validate(EnteteDonnees::$rulesImageDeux, EnteteDonnees::$customMessagesImageDeux);
            $request->validate(EnteteDonnees::$rulesImageTrois, EnteteDonnees::$customMessagesImageTrois);
        
            
            $phraseUn = $phraseUnPreliminaire['phrase_un'];
            $phraseDeux = $phraseDeuxPreliminaire['phrase_deux'];
            $phraseTrois = $phraseTroisPreliminaire['phrase_trois'];
        
            
            $fileUn = $request->file('image_un');
            $fileDeux = $request->file('image_deux');
            $fileTrois = $request->file('image_trois');
        
            $formatUn = $fileUn->getClientOriginalExtension();
            $formatDeux = $fileDeux->getClientOriginalExtension();
            $formatTrois = $fileTrois->getClientOriginalExtension();
        
            // Générer un nom de fichier unique
            $new_file_nameUn = "image_dynamique_un_". $PaysUrl . $dateActuelle .".$formatUn";
            $new_file_nameDeux = "image_dynamique_deux_". $PaysUrl . $dateActuelle .".$formatDeux";
            $new_file_nameTrois = "image_dynamique_trois_". $PaysUrl . $dateActuelle .".$formatTrois";

            // Enregistrer l'image avec un nom personnalisé
            $file_pathUn = $fileUn->storeAs("/elements/images", $new_file_nameUn);
            $file_pathDeux = $fileDeux->storeAs("/elements/images", $new_file_nameDeux);
            $file_pathTrois = $fileDeux->storeAs("/elements/images", $new_file_nameTrois);
                
            
            if(!isset($file_pathUn) || !isset($file_pathDeux) || !isset($file_pathTrois)) {

                return back()->with('error', "Erreur d'enregistrement des images dynamique");

            }
            
            $phraseStatique = null;

            $new_file_nameStatique = null;
            $new_file_nameVideo = null;

            $file_pathStatique = null;
            $file_pathVideo = null;
            
            $phraseVideo = null;

        } elseif($dataEntete['entete_choix'] == "image_statique") {

            // Si 'entete_choix' est "image_statique", définir le choix d'image statique à "true" et les autres à "false"
            $videoChoix = "false";
            $imageDynamiqueChoix = "false";
            $imageStatiqueChoix = "true";

            // Valider les données du formulaire
            $request->validate(EnteteDonnees::$rulesImageStatique, EnteteDonnees::$customMessagesImageStatique);
            $phraseStatiquePreliminaire = $request->validate(EnteteDonnees::$rulesPhraseStatique, EnteteDonnees::$customMessagesPhraseStatique);
        
            $phraseStatique = $phraseStatiquePreliminaire['phrase_statique'];
            
            $fileStatique = $request->file('image_statique');
        
        
            $formatStatique = $fileStatique->getClientOriginalExtension();
        
            // Générer un nom de fichier unique
            $new_file_nameStatique = "image_statique_". $PaysUrl . $dateActuelle .".$formatStatique";

            // Enregistrer l'image avec un nom personnalisé
            $file_pathStatique = $fileStatique->storeAs("/elements/images", $new_file_nameStatique);
                
            
            if(!isset($file_pathStatique)) {

                return back()->with('error', "Erreur d'enregistrement de l'image statique");

            }

            
            $phraseUn = null;
            $phraseDeux = null;
            /*$phraseVideo = null;*/

            $new_file_nameUn = null;
            $new_file_nameDeux = null;
            $new_file_nameVideo = null;

            $file_pathUn = null;
            $file_pathDeux = null;
            $file_pathVideo = null;
            
            $phraseVideo = null;
            $phraseTrois = null;
            $new_file_nameTrois = null;
            $file_pathTrois = null;

        } else {

            // Si 'entete_choix' ne correspond à aucune des valeurs ci-dessus, définir tous les choix à "false"
            $videoChoix = "false";
            $imageDynamiqueChoix = "false";
            $imageStatiqueChoix = "false";

            $phraseUn = null;
            $phraseDeux = null;
            $phraseStatique = null;
            /*$phraseVideo = null;*/

            $new_file_nameUn = null;
            $new_file_nameDeux = null;
            $new_file_nameStatique = null;
            $new_file_nameVideo = null;

            $file_pathUn = null;
            $file_pathDeux = null;
            $file_pathStatique = null;
            $file_pathVideo = null;
            
            $phraseVideo = null;
            $phraseTrois = null;
            $new_file_nameTrois = null;
            $file_pathTrois = null;

        }

       
        /*//condition très rigoureuse
        try {*/
            
        
            // Récupérer tous les pays existants
            $ListePays = Pays::all();

            // Parcourir chaque compte utilisateur existant
            foreach ($ListePays as $IndividuPays) {
                // Décrypter 
                $NomUrl = $IndividuPays->nom_url;
                $NomCorrect = Crypt::decrypt($IndividuPays->nom_normale);

                // Vérification
                if ($NomUrl == $PaysUrl || $NomCorrect == $dataPays['nom_correct_pays']) {

                    // Si une correspondance est trouvée, afficher une erreur et rediriger
                    return back()->with('error', 'Le pays existe déjà');
                }
            }

            // Créer un nouveau pays
            $newPays = Pays::create([
                'nom_url' => $PaysUrl,
                'nom_normale' => Crypt::encrypt($dataPays['nom_correct_pays']),
                'code_pays' => Crypt::encrypt($dataCode['code_pays']),
                'utilisateur_id' => $UtilisateurConnecter->id_utilisateur
            ]);

            if($newPays) {

                // Enregistrer les fonctionalités de l'interface
                $newAutorisation = Interfaces::create([
                    'video' => Crypt::encrypt($videoChoix),
                    'image_dynamique' => Crypt::encrypt($imageDynamiqueChoix),
                    'image_statique' => Crypt::encrypt($imageStatiqueChoix),
                    'projet' => Crypt::encrypt($fonctionalitesChecked['projet']),
                    'actualite' => Crypt::encrypt($fonctionalitesChecked['actualite']),
                    'podcast' => Crypt::encrypt($fonctionalitesChecked['podcast']),
                    'reportage' => Crypt::encrypt($fonctionalitesChecked['reportage']),
                    'membre_executif' => Crypt::encrypt($fonctionalitesChecked['membre_executif']),
                    'coordonnee' => Crypt::encrypt($fonctionalitesChecked['coordonnee']),
                    'contact' => Crypt::encrypt($fonctionalitesChecked['contact']),
                    'newsletter' => Crypt::encrypt($fonctionalitesChecked['newsletter']),
                    'commentaire' => Crypt::encrypt($fonctionalitesChecked['commentaire']),
                    'pays_id' => $newPays->id_pays,
                    'utilisateur_id' => $UtilisateurConnecter->id_utilisateur
                ]);

                if($newAutorisation) {

                    // Enregistrer les données d'entete
                    $newEntete = EnteteDonnees::create([
                        'phrase_un' => Crypt::encrypt($phraseUn),
                        'nom_image_dynamique_un' => Crypt::encrypt($new_file_nameUn),
                        'lien_image_dynamique_un' => Crypt::encrypt($file_pathUn),
                        'phrase_deux' => Crypt::encrypt($phraseDeux),
                        'nom_image_dynamique_deux' => Crypt::encrypt($new_file_nameDeux),
                        'lien_image_dynamique_deux' => Crypt::encrypt($file_pathDeux),
                        'phrase_trois' => Crypt::encrypt($phraseTrois),
                        'nom_image_dynamique_trois' => Crypt::encrypt($new_file_nameTrois),
                        'lien_image_dynamique_trois' => Crypt::encrypt($file_pathTrois),
                        'phrase_video' => Crypt::encrypt($phraseVideo),
                        'nom_video' => Crypt::encrypt($new_file_nameVideo),
                        'lien_video' => Crypt::encrypt($file_pathVideo),
                        'phrase_statique' => Crypt::encrypt($phraseStatique),
                        'nom_image_statique' => Crypt::encrypt($new_file_nameStatique),
                        'lien_image_statique' => Crypt::encrypt($file_pathStatique),
                        'pays_id' => $newPays->id_pays,
                        'utilisateur_id' => $UtilisateurConnecter->id_utilisateur
                    ]);


                    if($newEntete) {
                        // Redirection vers la page précédente avec un message succes
                        return redirect()->route('pays.nos-pays')->with('succes', "Vous venez d'enregistrer un pays.");
                    }else {

                        //supprimer le pays
                        $newPays->delete();
                        //supprimer l'interface
                        $newAutorisation->delete();

                        // Redirection vers la page précédente avec un message erreur
                        return back()->with('error', "Une erreur s'est produite pendant l'enregistrement. Veuillez réessayer");
                    }

                                
                }else {

                    //supprimer le pays
                    $newPays->delete();

                    // Redirection vers la page précédente avec un message erreur
                    return back()->with('error', "Une erreur s'est produite pendant l'enregistrement. Veuillez réessayer");
                }
            }else {
                
                // Redirection vers la page précédente avec un message erreur
                return back()->with('error', "Une erreur s'est produite pendant l'enregistrement. Veuillez réessayer");
            }

        /*} catch (\Exception $e) {
            
            // Redirection vers la page précédente avec un message d'erreur si une exception est lancée
            return back()->with('error', 'Une erreur est survenue : ' . $e->getMessage());
        }*/
        
    }


    private function remove_accents($string)
    {
        $unwanted_array = [
            'à' => 'a', 'á' => 'a', 'â' => 'a', 'ä' => 'a', 'ã' => 'a', 'å' => 'a', 'ā' => 'a',
            'è' => 'e', 'é' => 'e', 'ê' => 'e', 'ë' => 'e', 'ē' => 'e', 'ė' => 'e', 'ę' => 'e',
            'ì' => 'i', 'í' => 'i', 'î' => 'i', 'ï' => 'i', 'ī' => 'i',
            'ò' => 'o', 'ó' => 'o', 'ô' => 'o', 'ö' => 'o', 'õ' => 'o', 'ø' => 'o', 'ō' => 'o',
            'ù' => 'u', 'ú' => 'u', 'û' => 'u', 'ü' => 'u', 'ū' => 'u',
            'ý' => 'y', 'ÿ' => 'y',
            'ç' => 'c', 'ć' => 'c', 'č' => 'c',
            'ñ' => 'n',
            'ß' => 'ss',
            'œ' => 'oe', 'æ' => 'ae'
        ];

        return strtr($string, $unwanted_array);
    }
}
