<?php

namespace App\Http\Controllers\ComitesController\InterfaceController\PaysController;

use App\Http\Controllers\Controller;
use App\Models\Contacts;
use App\Models\Pays;
use App\Models\Utilisateurs;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Illuminate\Support\Facades\Crypt;

class ReponseContactController extends Controller
{
    //
    
    public function reponse(Request $request): RedirectResponse|View
    {
        // Récupérer les informations de l'utilisateur connecté envoyées par le middleware
        $UtilisateurConnecter = $request->attributes->get('authenticated_utilisateur');
    
        // Récupérer les informations du pays envoyées par le middleware
        $PaysPris = $request->attributes->get('IdPaysSuccess');
    
        // Récupérer les informations de l'interface du pays envoyées par le middleware
        $InterfacePaysRecuperer = $request->attributes->get('InterfacePays');
        
        // Récupérer les informations de contact envoyées par le middleware
        $DemandeContactRecuperer = $request->attributes->get('IdContactSuccess');
    
        // Validez les données du formulaire en utilisant les règles de validation du modèle "Contacts"
        $dataMessage = $request->validate(Contacts::$rulesMessage, Contacts::$customMessage);
        $dataSignature = $request->validate(Contacts::$rulesSignature, Contacts::$customSignature);
    
        try {

            // Envoyer un email à l'utilisateur pour signaler la reponse
            $DemandeContactRecuperer->ReponseDemandeContactAndSendEmail(
                $DemandeContactRecuperer,
                $dataMessage['message'],
                $dataSignature['signature']
            );

            return back()->with('succes', 'Réponse envoyer avec succès');
            
        } catch (\Exception $e) {
            // Erreur
            return back()->with('error', "Impossible de faire d'envoyer le message");
        }
    
    
    }
}
