<?php

namespace App\Http\Controllers\ComitesController\BasiqueController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Illuminate\Support\Facades\Crypt;

class PageNouveauMotDePasseController extends Controller
{
    //
    
    public function index(Request $request): RedirectResponse|View
    {
        
        // Récupérer les informations du token et email envoyées par le middleware
        $tokenDonnees = $request->attributes->get('valid_token');
        $email = $request->attributes->get('email');
        $utilisateurRecuperer = $request->attributes->get('utilisateur');
        
        //Décrypter le token
        $token = $tokenDonnees->token;
        
        // Afficher la vue de connexion si l'utilisateur n'est pas authentifié
        return view('basique.nouveauMotPasse', compact('email', 'token'));
    
    }
}
