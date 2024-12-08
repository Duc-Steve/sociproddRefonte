<?php

namespace App\Http\Controllers\PaysController;

use App\Http\Controllers\Controller;
use App\Models\Elements;
use App\Models\Actualites;
use App\Models\Commentaires;
use App\Models\Pays;
use App\Models\Podcasts;
use App\Models\Projets;
use App\Models\Reportages;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Crypt;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class InformationElementController extends Controller
{
    /**
     * Affiche la page informations des éléments avec les données du middleware.
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
            
        // Récupérer les informations de l'entête du pays envoyées par le middleware
        $PaysEntete = $request->attributes->get('enteteDonnees');
        
        // Récupérer les informations de l'élément envoyées par le middleware
        $ElementPaysRecuperer = $request->attributes->get('IdElementSuccess');

        // Récupérer le nombre de commentaire
        $NombreCommentaire = Commentaires::where('element_id', $ElementPaysRecuperer->id_element)->count();
        
        // Récupérer la liste des 3 derniers commentaires
        $TroisDernierCommentaireElement = Commentaires::where('element_id', $ElementPaysRecuperer->id_element)
                                            ->orderBy('created_at', 'desc')
                                            ->limit(3)
                                            ->get();
        


        // Récupérer la liste des pays actifs
        $listePaysActifs = Pays::where('statut_pays', 'actif')
                               ->orderBy('created_at', 'desc')
                               ->get();

        // Verifier le type d'élément
        if($ElementPaysRecuperer->type_element == "reportage") {

            // Récuperer les reportages de l'élément
            $ContenuElement = Reportages::where('element_id', $ElementPaysRecuperer->id_element)->get();

        }elseif($ElementPaysRecuperer->type_element == "podcast") {

            // Récuperer les reportages de l'élément
            $ContenuElement = Podcasts::where('element_id', $ElementPaysRecuperer->id_element)->get();

        }elseif($ElementPaysRecuperer->type_element == "actualite") {

            // Récuperer les actualites de l'élément
            $ContenuElement = Actualites::where('element_id', $ElementPaysRecuperer->id_element)->get();

        }elseif($ElementPaysRecuperer->type_element == "projet") {

            // Récuperer les projets de l'élément
            $ContenuElement = Projets::where('element_id', $ElementPaysRecuperer->id_element)->first();
        }
        
        
        
        return view('interface.pages.secondaires.informationElement', compact('PaysDonnee', 'FonctionaliteAcces', 'ElementPaysRecuperer', 'PaysEntete', 'NombreCommentaire', 'ContenuElement', 'listePaysActifs', 'TroisDernierCommentaireElement'));
    }
    
    
}