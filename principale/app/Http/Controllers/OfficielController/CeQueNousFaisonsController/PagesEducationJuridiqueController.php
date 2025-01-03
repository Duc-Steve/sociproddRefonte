<?php

namespace App\Http\Controllers\OfficielController\CeQueNousFaisonsController;

use App\Http\Controllers\Controller;
use App\Models\Elements;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PagesEducationJuridiqueController extends Controller
{
    //
    public function index(): RedirectResponse|View
    {
        // Récuperer les actualites
        $actualiterEducationJuridique = Elements::join('missions', 'missions.id_mission', '=', 'elements.mission_id')
                                                ->select('elements.*', 'missions.nom_mission')
                                                ->where('elements.type_element', "actualite")
                                                ->where('elements.statut_element', "publier")
                                                ->orderBy('elements.created_at', 'desc')
                                                ->get();
        
        $nombreActualiterEducationJuridique = count($actualiterEducationJuridique);

                                                


        $educationjuridique = true;
        
        return view('officiel.principale.faisons.educationjuridique', compact('educationjuridique', 'actualiterEducationJuridique', 'nombreActualiterEducationJuridique'));
    }
}
