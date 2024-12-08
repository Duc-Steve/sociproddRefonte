<?php

namespace App\Http\Controllers\ComitesController\InterfaceController\PaysController;

use App\Http\Controllers\Controller;
use App\Models\Elements;
use App\Models\Pays;
use App\Models\Utilisateurs;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Illuminate\Support\Facades\Crypt;

class PageElementsPaysController extends Controller
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

        // Récuperer la liste des élements
        $ListeElementsRecuperer = Elements::join('utilisateurs', 'utilisateurs.id_utilisateur', '=', 'elements.utilisateur_id')
                                    ->select('elements.*', 'utilisateurs.nom_prenom')
                                    ->where('elements.pays_id', $PaysPris->id_pays)
                                    ->orderBy('elements.created_at', 'desc')
                                    ->get();
                                    
        $NombreElementPays = Elements::where('pays_id', $PaysPris->id_pays)->count();
       

        //Page principale
        $ElementPaysExist = true;


        return view('principale.pays.elementsPays', compact('UtilisateurConnecter', 'ElementPaysExist', 'PaysPris', 'InterfacePaysRecuperer', 'ListeElementsRecuperer', 'NombreElementPays'));
   
    }
}
