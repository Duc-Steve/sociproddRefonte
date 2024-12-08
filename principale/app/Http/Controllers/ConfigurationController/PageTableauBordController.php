<?php

namespace App\Http\Controllers\ConfigurationController;

use App\Http\Controllers\Controller;
use App\Models\Contacts;
use App\Models\Newsletters;
use App\Models\Pays;
use App\Models\Utilisateurs;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Illuminate\Support\Facades\Crypt;

class PageTableauBordController extends Controller
{
    //   
    public function index(Request $request): RedirectResponse|View
    {
        
        // Récupérer les informations de l'utilisateur connecter envoyées par le middleware
        $UtilisateurConnecter = $request->attributes->get('authenticated_utilisateur');


        // Vérifier si l'utilisateur est le propriétaire
        $isOwner = $UtilisateurConnecter->type_utilisateur == "comite";

        if($isOwner) {
            
        }
        
        //recuperer le nombre total de newsletter 
        $newsletterNombre = Newsletters::count();

                                    
        //recuperer le nombre total de demande de contact 
        $ContactNombreDemande = Contacts::count();

                                    
        //recuperer le nombre total de pays 
        $NombrePays = Pays::count();                 
       
        //recuperer le nombre total d'utilisateur
        $UtilisateurNombre = Utilisateurs::count();


       
        //page tableau de bord
        $TableauBordExist =  true;

        return view('tableauBord', compact('TableauBordExist', 'UtilisateurConnecter', 'newsletterNombre', 'ContactNombreDemande', 'NombrePays', 'UtilisateurNombre'));
   
    }
}
