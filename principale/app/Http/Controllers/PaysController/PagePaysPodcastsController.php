<?php

namespace App\Http\Controllers\SiteController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Elements;
use App\Models\Pays;
use App\Models\Coordonnees;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;

class PagePaysPodcastsController extends Controller
{
    //
    /**
     * Affiche la page listes des podcasts avec les données du middleware.
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
                               
        // Récupérer la liste des podcasts actifs
        $PodcastsActifs = Elements::join('podcasts', 'podcasts.element_id', '=', 'elements.id_element')
                          ->where('elements.pays_id', $PaysDonnee->id_pays)
                          ->where('elements.type_element', "podcast")
                          ->where('elements.statut_element', "publier")
                          ->where('podcasts.statut_podcast', "publier")
                          ->select('elements.*', 'podcasts.*')
                          ->whereRaw('podcasts.id_podcast = (SELECT MIN(p.id_podcast) FROM podcasts p WHERE p.element_id = elements.id_element)')
                          ->orderBy('elements.created_at', 'desc')
                          ->paginate(6); // 6 podcasts par page


        $NombrePodcastsActifs = is_countable($PodcastsActifs) ? count($PodcastsActifs) : 0;

       
        

        return view('interface.pages.principales.podcasts', compact('PaysDonnee', 'FonctionaliteAcces', 'coordonneePays', 'listePaysActifs', 'PaysEntete', 'PodcastsActifs', 'NombrePodcastsActifs'));
    }
}
