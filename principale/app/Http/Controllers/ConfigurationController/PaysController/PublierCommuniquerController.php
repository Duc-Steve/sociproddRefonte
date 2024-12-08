<?php

namespace App\Http\Controllers\ComitesController\InterfaceController\PaysController;

use App\Http\Controllers\Controller;
use App\Models\Newsletters;
use App\Models\Pays;
use App\Models\Utilisateurs;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Illuminate\Support\Facades\Crypt;


class PublierCommuniquerController extends Controller
{
    //
    public function publier(Request $request): RedirectResponse|View
    {
        // Récupérer les informations de l'utilisateur connecté envoyées par le middleware
        $UtilisateurConnecter = $request->attributes->get('authenticated_utilisateur');
    
        // Récupérer les informations du pays envoyées par le middleware
        $PaysPris = $request->attributes->get('IdPaysSuccess');
    
        // Récupérer les informations de l'interface du pays envoyées par le middleware
        $InterfacePaysRecuperer = $request->attributes->get('InterfacePays');
    
        // Validez les données du formulaire en utilisant les règles de validation du modèle "Newsletters"
        $dataSujet = $request->validate(Newsletters::$rulesSujet, Newsletters::$customSujet);
        $dataMessage = $request->validate(Newsletters::$rulesMessage, Newsletters::$customMessage);
        $dataSignature = $request->validate(Newsletters::$rulesSignature, Newsletters::$customSignature);
    
        // Récupérer la liste des newsletters actives
        $RecupererListeNewsletter = Newsletters::where('statut_newsletter', "activer")->get();
    
        $nombrePersonnePartager = 0;
    
        if ($RecupererListeNewsletter->isNotEmpty()) {
            // Boucle pour parcourir chaque newsletter
            foreach ($RecupererListeNewsletter as $RecupererListeNewsletterIndividu) {
                
                try {
    
                    // Envoyer un email à l'utilisateur pour signaler la nouvelle connexion
                    $RecupererListeNewsletterIndividu->PrendreMessageAndSendEmail(
                        $RecupererListeNewsletterIndividu,
                        $dataSujet['sujet'],
                        $dataMessage['message'],
                        $dataSignature['signature']
                    );
    
                    $nombrePersonnePartager++;
                    
                } catch (\Exception $e) {
                    // Log the exception or handle it if necessary
                    continue; // Continue with the next newsletter in case of an error
                }
            }
    
            // Redirection avec message de succès
            return back()->with('succes', 'Communiqué diffusé à environ ' . $nombrePersonnePartager . ' personnes.');
        } else {
            return back()->with('error', "Impossible de faire un communiqué car il n'existe pas d'utilisateur abonné à la newsletter.");
        }
    }

}
