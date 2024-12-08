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

class PagePaysReportagesController extends Controller
{
    //
    /**
     * Affiche la page listes des reportages avec les données du middleware.
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
                               
        // Récupérer la liste des reportages actifs
        $ReportagesActifs = Elements::where('pays_id', $PaysDonnee->id_pays)
                                        ->where('type_element', "reportage")
                                        ->where('statut_element', "publier")
                                        ->orderBy('created_at', 'desc')
                                        ->paginate(6); // 6 reportages par page
       
       
        $NombreReportagesActifs = is_countable($ReportagesActifs) ? count($ReportagesActifs) : 0;
        

        return view('interface.pages.principales.reportages', compact('PaysDonnee', 'FonctionaliteAcces', 'coordonneePays', 'listePaysActifs', 'PaysEntete', 'ReportagesActifs', 'NombreReportagesActifs'));
    }
}
