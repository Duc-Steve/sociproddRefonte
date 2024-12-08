<?php

namespace App\Http\Controllers\ComitesController\InterfaceController\GestionController;

use App\Http\Controllers\Controller;
use App\Models\ProfilesMembreBureauExecutifs;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Support\Facades\Crypt;

class MiseJourProfileSBEController extends Controller
{
    public function update(Request $request): RedirectResponse|View
    {
        // Récupérer les informations du profil connecté envoyées par le middleware
        $profileRecuperer = $request->attributes->get('profileDonnee');
        
        if (!empty($profileRecuperer)) {
            // Validation des champs 'nom_prenom' et 'description'
            $dataNomPrenom = $request->validate(
                ProfilesMembreBureauExecutifs::$rulesNomPrenom,
                ProfilesMembreBureauExecutifs::$customNomPrenom
            );
            $dataDescription = $request->validate(
                ProfilesMembreBureauExecutifs::$rulesDescription,
                ProfilesMembreBureauExecutifs::$customDescription
            );
            
            // Validation et gestion de l'URL Facebook
            if (!empty($request->input('url_facebook'))) {
                $dataFacebookPrerequi = $request->validate(
                    ProfilesMembreBureauExecutifs::$rulesFacebook, 
                    ProfilesMembreBureauExecutifs::$customFacebook
                );
                $dataFacebook = $dataFacebookPrerequi['url_facebook'];
            } else {
                $dataFacebook = Crypt::decrypt($profileRecuperer->url_facebook);
            }
            
            // Validation et gestion de l'URL Twitter
            if (!empty($request->input('url_twitter'))) {
                $dataTwitterPrerequi = $request->validate(
                    ProfilesMembreBureauExecutifs::$rulesTwitter, 
                    ProfilesMembreBureauExecutifs::$customTwitter
                );
                $dataTwitter = $dataTwitterPrerequi['url_twitter'];
            } else {
                $dataTwitter = Crypt::decrypt($profileRecuperer->url_twitter);
            }
            
            // Validation et gestion de l'URL Portefolio
            if (!empty($request->input('url_portefolio'))) {
                $dataPortefolioPrerequi = $request->validate(
                    ProfilesMembreBureauExecutifs::$rulesPortefolio, 
                    ProfilesMembreBureauExecutifs::$customPortefolio
                );
                $dataPortefolio = $dataPortefolioPrerequi['url_portefolio'];
            } else {
                $dataPortefolio = Crypt::decrypt($profileRecuperer->url_portefolio);
            }
            
            // Validation et gestion de l'URL LinkedIn
            if (!empty($request->input('url_linkedin'))) {
                $dataLinkedInPrerequi = $request->validate(
                    ProfilesMembreBureauExecutifs::$rulesLinkedIn, 
                    ProfilesMembreBureauExecutifs::$customLinkedIn
                );
                $dataLinkedIn = $dataLinkedInPrerequi['url_linkedin'];
            } else {
                $dataLinkedIn = Crypt::decrypt($profileRecuperer->url_linkedin);
            }
           
            // Gestion de l'image
            if ($request->hasFile('image')) {
                // Valider l'image
                $request->validate(
                    ProfilesMembreBureauExecutifs::$rulesImage, 
                    ProfilesMembreBureauExecutifs::$customImage
                );
                
                $file = $request->file('image');
                $format = $file->getClientOriginalExtension();
                $new_file_name = "image_membre_" . now()->format('Ymd_His') . ".$format";
                $file_path = $file->storeAs("elements/images", $new_file_name);
                
                if (!$file_path) {
                    return back()->with('error', "Erreur d'enregistrement de l'image");
                }
            } else {
                $file_path = Crypt::decrypt($profileRecuperer->lien_photo);
                $new_file_name = Crypt::decrypt($profileRecuperer->nom_photo);
            }

            // Mise à jour du profil avec les données encryptées
            try {
            
                $profileRecuperer->update([
                    'nom_prenom' => Crypt::encrypt($dataNomPrenom['nom_prenom']),
                    'nom_photo' => Crypt::encrypt($new_file_name),
                    'lien_photo' => Crypt::encrypt($file_path),
                    'petit_message' => Crypt::encrypt($dataDescription['description']),
                    'url_facebook' => Crypt::encrypt($dataFacebook),
                    'url_twitter' => Crypt::encrypt($dataTwitter),
                    'url_portefolio' => Crypt::encrypt($dataPortefolio),
                    'url_linkedin' => Crypt::encrypt($dataLinkedIn),
                ]);

                return back()->with('succes', 'Profil mis à jour avec succès.');
                
            } catch (\Exception $e) {
                return back()->with('error', 'Une erreur est survenue : ' /*. $e->getMessage()*/);
            }
        } else {
            return back()->with('error', 'Une erreur est survenue');
        }
    }
}
