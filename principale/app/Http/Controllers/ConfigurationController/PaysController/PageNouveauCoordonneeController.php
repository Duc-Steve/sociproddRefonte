<?php

namespace App\Http\Controllers\ConfigurationController\PaysController;

use App\Http\Controllers\Controller;
use App\Models\Coordonnees;
use App\Models\Pays;
use App\Models\Utilisateurs;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Illuminate\Support\Facades\Crypt;

class PageNouveauCoordonneeController extends Controller
{
    //
    public function index(Request $request): RedirectResponse|View
    {
        
        // Récupérer les informations de l'utilisateur connecter envoyées par le middleware
        $UtilisateurConnecter = $request->attributes->get('authenticated_utilisateur');

        // Récupérer les informations du membre envoyées par le middleware
        $PaysPris = $request->attributes->get('IdPaysSuccess');
        
        // Récupérer les informations du membre envoyées par le middleware
        $InterfacePaysRecuperer = $request->attributes->get('InterfacePays');

        // Récupérer les coordonnees du pays
        $PaysCoordonneeInfo = Coordonnees::where('pays_id', $PaysPris->id_pays)->first();

        // si aucune coordonnee n'existe
        if(!isset($PaysCoordonneeInfo)) {

       
            //Page principale
            $CoordonneePaysExist = true;
    
    
            return view('principale.pays.nouveauCoordonneePays', compact('UtilisateurConnecter', 'CoordonneePaysExist', 'PaysPris', 'InterfacePaysRecuperer'));
       

        }else {

            return redirect()->route('nos-coordonnees', ['IdPays' => $InterfacePaysRecuperer->pays_id]);

        }

    }
}
