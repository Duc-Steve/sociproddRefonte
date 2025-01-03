<?php

namespace App\Http\Controllers\ConfigurationController\PaysController;

use App\Http\Controllers\Controller;
use App\Models\EnteteDonnees;
use App\Models\Pays;
use App\Models\Utilisateurs;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Illuminate\Support\Facades\Crypt;

class PageInterfacePaysController extends Controller
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
        
        // Trouver les informations d'entete du pays 
        $DonneeEntete = EnteteDonnees::where('pays_id', $PaysPris->id_pays)->first();

       
        //Page principale
        $InterfacePaysExist = true;


        return view('configuration.pays.interfacePays', compact('UtilisateurConnecter', 'InterfacePaysExist', 'PaysPris', 'InterfacePaysRecuperer', 'DonneeEntete'));
   
    }
}
