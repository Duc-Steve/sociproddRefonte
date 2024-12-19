<?php

namespace App\Http\Controllers\ConfigurationController\UtilisateursController;

use App\Http\Controllers\Controller;
use App\Models\Utilisateur;
use App\Models\Utilisateurs;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Illuminate\Support\Facades\Crypt;

class PageUtilisateurController extends Controller
{
    //
    public function index(Request $request): RedirectResponse|View
    {
        
        // Récupérer les informations de l'utilisateur connecter envoyées par le middleware
        $UtilisateurConnecter = $request->attributes->get('authenticated_utilisateur');


        // Vérifier si l'utilisateur est le propriétaire
        // $isOwner = $UtilisateurConnecter->type_utilisateur == "comite";

        //Récupérer la liste des Utilisateur, avec l'utilisateur ayant enregistrer
        $RecupererListeUtilisateur = Utilisateurs::orderBy('created_at', 'desc')
        ->get();

        //Récuperer le nombre de Utilisateur 
        $NombreUtilisateur = Utilisateurs::count();

        
        //page tableau de bord
        $UtilisateurExist =  true;

        return view('configuration.utilisateurs.utilisateur', compact('UtilisateurExist', 'UtilisateurConnecter', 'NombreUtilisateur', 'RecupererListeUtilisateur'));
   
    }
}
