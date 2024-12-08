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



class PagePaysController extends Controller
{
    // 
    public function index(Request $request): RedirectResponse|View
    {
        
        // Récupérer les informations de l'utilisateur connecter envoyées par le middleware
        $UtilisateurConnecter = $request->attributes->get('authenticated_utilisateur');

        //Récupérer la liste des pays, avec l'utilisateur ayant enregistrer
        $RecupererListePays = Pays::join('utilisateurs', 'utilisateurs.id_utilisateur', '=', 'pays.utilisateur_id')
                                        ->select('pays.*', 'utilisateurs.nom_prenom')
                                        ->orderBy('pays.created_at', 'desc')
                                        ->get();
    


        //Récuperer le nombre de pays 
        $NombrePays = Pays::count();

        
        //page tableau de bord
        $PaysExist =  true;

        return view('principale.pays.pays', compact('PaysExist', 'UtilisateurConnecter', 'NombrePays', 'RecupererListePays'));
   
    }
}
