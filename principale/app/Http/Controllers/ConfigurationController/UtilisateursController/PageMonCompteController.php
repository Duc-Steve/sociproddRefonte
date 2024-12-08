<?php

namespace App\Http\Controllers\ComitesController\InterfaceController\UtilisateursController;

use App\Http\Controllers\Controller;
use App\Models\Pays;
use App\Models\Utilisateur;
use App\Models\ReseauxUtilisateurs;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;

class PageMonCompteController extends Controller
{
    //
    
    public function index(Request $request): RedirectResponse|View
    {
        //verifions si l'IdPays
        if(!empty($request->route('IdPays'))) {
                
            // Récupérer les informations du membre envoyées par le middleware
            $PaysPris = $request->attributes->get('IdPaysSuccess');
            
            // Récupérer les informations du membre envoyées par le middleware
            $InterfacePaysRecuperer = $request->attributes->get('InterfacePays');
        
        }else {
            $PaysPris = null;
            $InterfacePaysRecuperer = null;
        }
        
        // Récupérer les informations de l'utilisateur connecter envoyées par le middleware
        $UtilisateurConnecter = $request->attributes->get('authenticated_utilisateur');

        
        //page mon compte
        $CompteExist =  true;

        return view('principale.utilisateurs.detailMonCompte', compact('CompteExist', 'UtilisateurConnecter', 'PaysPris', 'InterfacePaysRecuperer'));
   
    }
    
}