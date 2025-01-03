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



class PageListeMissionsController extends Controller
{
    //
    public function index(Request $request): RedirectResponse|View
    {
        
        // Récupérer les informations de l'utilisateur connecter envoyées par le middleware
        $UtilisateurConnecter = $request->attributes->get('authenticated_utilisateur');

        //Récupérer la liste des missions, avec l'utilisateur ayant enregistrer
        $RecupererListeMission = Missions::join('utilisateurs', 'utilisateurs.id_utilisateur', '=', 'missions.utilisateur_id')
                                        ->select('missions.*', 'utilisateurs.nom_prenom')
                                        ->orderBy('missions.created_at', 'desc')
                                        ->get();
    


        //Récuperer le nombre de missions
        $NombreMission = Missions::count();

        
        //page tableau de bord
        $MissionExist =  true;

        return view('configuration.missions.listeMission', compact('MissionExist', 'UtilisateurConnecter', 'NombreMission', 'RecupererListeMission'));
   
    }
}
