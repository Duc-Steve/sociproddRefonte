<?php

namespace App\Http\Controllers\ConfigurationController\PaysController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Illuminate\Support\Facades\Crypt;

class PageDetailContactController extends Controller
{
    //
    public function index(Request $request): RedirectResponse|View
    {
        
        // Récupérer les informations de l'utilisateur connecter envoyées par le middleware
        $UtilisateurConnecter = $request->attributes->get('authenticated_utilisateur');

        // Récupérer les informations du pays envoyées par le middleware
        $PaysPris = $request->attributes->get('IdPaysSuccess');
        
        // Récupérer les informations de l'interface pays envoyées par le middleware
        $InterfacePaysRecuperer = $request->attributes->get('InterfacePays');
        
        // Récupérer les informations de contact envoyées par le middleware
        $DemandeContactRecuperer = $request->attributes->get('IdContactSuccess');

        if($DemandeContactRecuperer->vue == 0) {

            //mettre à jour la vue
            $DemandeContactRecuperer->vue = 1;
            $DemandeContactRecuperer->utilisateur_id = $UtilisateurConnecter->id_utilisateur;
            $DemandeContactRecuperer->update();

        }

        //Page principale
        $ContactExist = true;


        return view('principale.pays.detailContact', compact('UtilisateurConnecter', 'ContactExist', 'PaysPris', 'InterfacePaysRecuperer', 'DemandeContactRecuperer'));


    }
}
