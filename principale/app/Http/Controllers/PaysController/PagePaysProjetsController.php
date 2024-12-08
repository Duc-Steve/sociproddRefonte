<?php

namespace App\Http\Controllers\PaysController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Elements;
use App\Models\Pays;
use App\Models\Coordonnees;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;

class PagePaysProjetsController extends Controller
{
    /**
     * Affiche la page listes des Projets avec les données du middleware.
     *
     * @param Request $request
     * @param string $PaysUrl
     * @return RedirectResponse|View
     */
    public function index(Request $request, $PaysUrl)
    {
        // Récupérer les informations du pays envoyées par le middleware
        $PaysDonnee = $request->attributes->get('paysRecupererVerification');
        
        // Récupérer les informations des fonctionnalités du pays envoyées par le middleware
        $FonctionaliteAcces = $request->attributes->get('fonctionnaliteAcces');
    
        // Récupérer les informations en rapport avec les coordonnées du pays 
        $coordonneePays = Coordonnees::where('pays_id', $PaysDonnee->id_pays)->first();
            
        // Récupérer les informations de l'entête du pays envoyées par le middleware
        $PaysEntete = $request->attributes->get('enteteDonnees');

        // Récupérer la liste des pays actifs
        $listePaysActifs = Pays::where('statut_pays', 'actif')
                               ->orderBy('created_at', 'desc')
                               ->get();
                               
        // Récupérer la liste des projets en cours actifs
        $ProjetsEnCoursActifs = Elements::join('projets', 'projets.element_id', '=', 'elements.id_element')
                                        ->where('elements.pays_id', $PaysDonnee->id_pays)
                                        ->where('elements.type_element', "projet")
                                        ->where('elements.statut_element', "publier")
                                        ->where('projets.statut_projet', "en cours")
                                        ->orderBy('elements.created_at', 'desc')
                                        ->get();
                                        
        // Récupérer la liste des projets terminer actifs
        $ProjetsTerminerActifs = Elements::join('projets', 'projets.element_id', '=', 'elements.id_element')
                                        ->where('elements.pays_id', $PaysDonnee->id_pays)
                                        ->where('elements.type_element', "projet")
                                        ->where('elements.statut_element', "publier")
                                        ->where('projets.statut_projet', "terminer")
                                        ->orderBy('elements.created_at', 'desc')
                                        ->get();
                                                                        
        // Récupérer la liste des projets terminer actifs
        $ProjetsEnAttenteActifs = Elements::join('projets', 'projets.element_id', '=', 'elements.id_element')
                                        ->where('elements.pays_id', $PaysDonnee->id_pays)
                                        ->where('elements.type_element', "projet")
                                        ->where('elements.statut_element', "publier")
                                        ->where('projets.statut_projet', "en attente de financement")
                                        ->orderBy('elements.created_at', 'desc')
                                        ->get();
       
        // Calculer le nombre de projets en cours actifs
        $NombreProjetsEnCoursActifs = is_countable($ProjetsEnCoursActifs) ? count($ProjetsEnCoursActifs) : 0;
        
        // Calculer le nombre de projets terminer actifs
        $NombreProjetsTerminerActifs = is_countable($ProjetsTerminerActifs) ? count($ProjetsTerminerActifs) : 0;
        
        // Calculer le nombre de projets en attente de financement actifs
        $NombreProjetsEnAttenteActifs = is_countable($ProjetsEnAttenteActifs) ? count($ProjetsEnAttenteActifs) : 0;
        

        return view('interface.pages.principales.projets', compact(
            'PaysDonnee', 
            'FonctionaliteAcces', 
            'coordonneePays', 
            'listePaysActifs', 
            'PaysEntete', 
            'ProjetsEnCoursActifs', 
            'ProjetsTerminerActifs', 
            'ProjetsEnAttenteActifs', 
            'NombreProjetsEnCoursActifs', 
            'NombreProjetsTerminerActifs',
            'NombreProjetsEnAttenteActifs'
        ));
    }
}
