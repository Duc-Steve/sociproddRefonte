<?php

namespace App\Http\Controllers\ComitesController\InterfaceController\PaysController;

use App\Http\Controllers\Controller;
use App\Models\Pays;
use App\Models\Utilisateurs;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Illuminate\Support\Facades\Crypt;

class PageNouveauPaysController extends Controller
{
    //
    
    public function index(Request $request): RedirectResponse|View
    {
        
        // Récupérer les informations de l'utilisateur connecter envoyées par le middleware
        $UtilisateurConnecter = $request->attributes->get('authenticated_utilisateur');

        
        //page tableau de bord
        $PaysExist =  true;

        return view('principale.pays.nouveauPays', compact('PaysExist', 'UtilisateurConnecter'));
   
    }
}
