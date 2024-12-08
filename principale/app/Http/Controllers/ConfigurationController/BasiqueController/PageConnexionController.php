<?php

namespace App\Http\Controllers\ComitesController\BasiqueController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Illuminate\Support\Facades\Crypt;

class PageConnexionController extends Controller
{
    
    // 
    public function index(): RedirectResponse|View
    {
        
        // Vérifier si l'utilisateur est authentifié
        if (auth('utilisateur')->check()) {

            //recuperer l'utilisateur connecter
            $utilisateur = auth('utilisateur')->user();
           
            if($utilisateur->type_utilisateur == "representant") {

                // Redirection vers la route du bilan pays si l'utilisateur est authentifié
                return redirect()->route('bilan-pays', ['IdPays' => $utilisateur->pays_id]);

            }else {
                    
                // Redirection vers la route du tableau de bord si l'utilisateur est authentifié
                return redirect()->route('tableau-bord');
            }
            
        } else {

            // Afficher la vue de connexion si l'utilisateur n'est pas authentifié
            return view('basique.connexion');
        }
    }

}
