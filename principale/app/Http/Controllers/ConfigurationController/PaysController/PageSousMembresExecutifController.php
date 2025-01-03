<?php

namespace App\Http\Controllers\ConfigurationController\PaysController;

use App\Http\Controllers\Controller;
use App\Models\Pays;
use App\Models\ProfilesMembreBureauExecutifs;
use App\Models\Utilisateurs;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Illuminate\Support\Facades\Crypt;

class PageSousMembresExecutifController extends Controller
{
    //
    public function index(Request $request): RedirectResponse|View
    {
        
        // Récupérer les informations de l'utilisateur connecter envoyées par le middleware
        $UtilisateurConnecter = $request->attributes->get('authenticated_utilisateur');

        // Récupérer les informations du membre envoyées par le middleware
        $PaysPris = $request->attributes->get('IdPaysSuccess');
        
        // Récupérer les informations du membre envoyées par le middleware
        $InterfacePaysRecuperer = $request->attributes->get('InterfacePays');

        // Récupérer les profiles des membres du sous bureau exécutif du pays
        $sousMembreExecutifPays = ProfilesMembreBureauExecutifs::where('pays_id', $PaysPris->id_pays)
                                                        ->get();

        // Récupérer le nombre de profiles enregistrer
        $nombreSousMembreExecutifPays = is_countable($sousMembreExecutifPays) ? count($sousMembreExecutifPays) : 0;;

       
        //Page principale
        $SousExecutifExist = true;


        return view('configuration.pays.sousMembreExecutifPays', compact('UtilisateurConnecter', 'SousExecutifExist', 'PaysPris', 'InterfacePaysRecuperer', 'sousMembreExecutifPays', 'nombreSousMembreExecutifPays'));
   
    }
}
