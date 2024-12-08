<?php

namespace App\Http\Controllers\ComitesController\InterfaceController;

use App\Http\Controllers\Controller;
use App\Models\Logs;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Illuminate\Support\Facades\Crypt;


class PageSuivieActivtesController extends Controller
{
    //
    public function index(Request $request): RedirectResponse|View
    {
        
        // Récupérer les informations de l'utilisateur connecter envoyées par le middleware
        $UtilisateurConnecter = $request->attributes->get('authenticated_utilisateur');

        // Récupérer les différentes Activite
        $listeActivite = Logs::orderBy('action_date', 'desc')
                                ->get();
       
        //page suivie de Activite
        $SuivieActiviteExist =  true;

        return view('principale.activites.suivieActivite', compact('SuivieActiviteExist', 'UtilisateurConnecter', 'listeActivite'));
   
    }
}
