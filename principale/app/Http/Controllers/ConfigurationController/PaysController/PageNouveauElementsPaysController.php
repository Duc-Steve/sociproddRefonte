<?php

namespace App\Http\Controllers\ConfigurationController\PaysController;

use App\Http\Controllers\Controller;
use App\Models\Elements;
use App\Models\Missions;
use App\Models\Pays;
use App\Models\Utilisateurs;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Illuminate\Support\Facades\Crypt;

class PageNouveauElementsPaysController extends Controller
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

        // Récupérer les missions
        $missionRecuperer = Missions::where('statut_mission', "activer")->get();


        //Page principale
        $ElementPaysExist = true;


        return view('configuration.pays.nouveauElementPays', compact('UtilisateurConnecter', 'ElementPaysExist', 'PaysPris', 'InterfacePaysRecuperer', 'missionRecuperer'));
   
    }
}
