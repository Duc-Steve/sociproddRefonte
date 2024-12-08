<?php

namespace App\Http\Controllers\ComitesController\InterfaceController\UtilisateursController;

use App\Http\Controllers\Controller;
use App\Models\Pays;
use App\Models\Utilisateur;
use App\Models\Utilisateurs;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Illuminate\Support\Facades\Crypt;

class PageNouveauUtilisateurController extends Controller
{
    //
    public function index(Request $request): RedirectResponse|View
    {
        
        // Récupérer les informations de l'utilisateur connecter envoyées par le middleware
        $UtilisateurConnecter = $request->attributes->get('authenticated_utilisateur');

        
        //Récupérer la liste des pays
        $RecupererListePays = Pays::orderBy('created_at', 'desc')
                                        ->where('statut_pays', "actif")
                                        ->get();
        //page tableau de bord
        $UtilisateurExist =  true;

        return view('principale.utilisateurs.nouvelUtilisateur', compact('UtilisateurExist', 'UtilisateurConnecter', 'RecupererListePays'));
   
    }
}
