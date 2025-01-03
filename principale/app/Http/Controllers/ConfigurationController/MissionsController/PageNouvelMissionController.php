<?php

namespace App\Http\Controllers\ConfigurationController\MissionsController;

use App\Http\Controllers\Controller;
use App\Models\Missions;
use App\Models\Utilisateurs;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Illuminate\Support\Facades\Crypt;


class PageNouvelMissionController extends Controller
{
    //
    public function index(Request $request): RedirectResponse|View
    {
        
        // Récupérer les informations de l'utilisateur connecter envoyées par le middleware
        $UtilisateurConnecter = $request->attributes->get('authenticated_utilisateur');
        
        // Récupérer les missions
        $missionsListe = Missions::where('statut_mission', "activer")->get();

        
        //page tableau de bord
        $MissionExist =  true;

        return view('configuration.missions.nouvelMission', compact('MissionExist', 'UtilisateurConnecter', 'missionsListe'));
   
    }
}
