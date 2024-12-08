<?php

namespace App\Http\Controllers\ComitesController\InterfaceController\GestionController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;


class PageGestionProfileSBEController extends Controller
{
    //
    
    public function index(Request $request): RedirectResponse|View
    {
        
        // Récupérer les informations du profile connecter envoyées par le middleware
        $profileRecuperer = $request->attributes->get('profileDonnee');

        return view('principale.utilisateurs.gestionProfile', compact('profileRecuperer'));
   
    }
}
