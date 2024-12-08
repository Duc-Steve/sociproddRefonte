<?php

namespace App\Http\Controllers\ComitesController\InterfaceController\PaysController;

use App\Http\Controllers\Controller;
use App\Models\Actualites;
use App\Models\Commentaires;
use App\Models\Elements;
use App\Models\Pays;
use App\Models\Podcasts;
use App\Models\Projets;
use App\Models\Reportages;
use App\Models\Utilisateurs;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Illuminate\Support\Facades\Crypt;

class PageDetailElementsAutrePaysController extends Controller
{
    //
    public function index(Request $request): RedirectResponse|View
    {
        
        // Récupérer les informations de l'utilisateur connecter envoyées par le middleware
        $UtilisateurConnecter = $request->attributes->get('authenticated_utilisateur');

        // Récupérer les informations du pays envoyées par le middleware
        $PaysPris = $request->attributes->get('IdPaysSuccess');
        
        // Récupérer les informations de l'interface pays envoyées par le middleware
        $InterfacePaysRecuperer = $request->attributes->get('InterfacePays');
        
        // Récupérer les informations de l'élément envoyées par le middleware
        $ElementPaysRecuperer = $request->attributes->get('IdElementSuccess');

        // Récupérer le nombre de commentaire
        $NombreCommentaire = Commentaires::where('element_id', $ElementPaysRecuperer->id_element)->count();


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


        //Page principale
        $ElementPaysExist = true;


        return view('principale.pays.detailElementAutre', compact('UtilisateurConnecter', 'ElementPaysExist', 'PaysPris', 'InterfacePaysRecuperer', 'ElementPaysRecuperer', 'NombreCommentaire', 'ContenuElement'));
   
    }
}
