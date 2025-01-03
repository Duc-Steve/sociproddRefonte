<?php

namespace App\Http\Controllers\ConfigurationController\MissionsController;

use App\Http\Controllers\Controller;
use App\Models\Missions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class EnregistrerNouvelMissionController extends Controller
{
    public function create(Request $request): RedirectResponse|View
    {
        try {
            // Récupérer les informations de l'utilisateur connecté envoyées par le middleware
            $UtilisateurConnecter = $request->attributes->get('authenticated_utilisateur');

            // Valider les données du formulaire
            $dataMissions = $request->validate(Missions::$rulesCreation, Missions::$customCreation);

            // Vérifier si la mission existe déjà
            $touteMissions = Missions::all();
            foreach ($touteMissions as $mission) {
                $missionInd = Crypt::decrypt($mission->nom_mission);

                if (isset($missionInd) && $missionInd === $dataMissions['nom_mission']) {
                    return back()->with('error', 'Cette mission existe déjà!!');
                }
            }

            // Créer une nouvelle mission
            Missions::create([
                'nom_mission' => Crypt::encrypt($dataMissions['nom_mission']),
                'utilisateur_id' => $UtilisateurConnecter->id_utilisateur
            ]);

            // Redirection avec un message de succès
            return redirect()->route('missions.nos-missions')->with('succes', "Vous venez d'enregistrer une mission.");
        } catch (\Exception $e) {
            // Gestion des erreurs
            return back()->with('error', 'Une erreur est survenue : ' . $e->getMessage());
        }
    }
}
