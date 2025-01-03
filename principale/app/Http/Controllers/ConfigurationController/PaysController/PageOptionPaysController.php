<?php

namespace App\Http\Controllers\ConfigurationController\PaysController;

use App\Http\Controllers\Controller;
use App\Models\Pays;
use App\Models\Contacts;
use App\Models\Newsletters;
use App\Models\Utilisateurs;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Illuminate\Support\Facades\Crypt;

class PageOptionPaysController extends Controller
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
        
        //recuperer le nombre total de newsletter 
        $newsletterNombre = Newsletters::where('pays_id', $PaysPris->id_pays)->count();

                                    
        //recuperer le nombre total de demande de contact 
        $ContactNombreDemande = Contacts::where('pays_id', $PaysPris->id_pays)->count();

                                    
        //recuperer le nombre total de pays 
        $NombreUtilisateur = Utilisateurs::where('pays_id', $PaysPris->id_pays)->count();       
       
        //Page principale
        $BordPaysExist = true;


        return view('configuration.pays.bilanPays', compact('UtilisateurConnecter', 'BordPaysExist', 'PaysPris', 'InterfacePaysRecuperer', 'newsletterNombre', 'ContactNombreDemande', 'NombreUtilisateur'));
   
    }
}
