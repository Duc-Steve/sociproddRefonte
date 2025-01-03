<?php

namespace App\Http\Controllers\ConfigurationController\PaysController;

use App\Http\Controllers\Controller;
use App\Models\Newsletters;
use App\Models\Pays;
use App\Models\Utilisateurs;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Illuminate\Support\Facades\Crypt;

class PageNewsletterController extends Controller
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

       
        //Récupérer la liste des newsletters, avec l'utilisateur ayant enregistrer
        $RecupererListeNewsletter = Newsletters::join('pays', 'pays.id_pays', '=', 'pays_id')
                                        ->select('newsletters.*', 'pays.nom_normale')
                                        ->where('newsletters.pays_id', $PaysPris->id_pays)
                                        ->orderBy('newsletters.created_at', 'desc')
                                        ->get();
    


        //Récuperer le nombre de newsletters
        $NombreNewsletter = Newsletters::count();


        //Page principale
        $NewsletterOptionExist = true;


        return view('configuration.pays.newsletterPays', compact('UtilisateurConnecter', 'NewsletterOptionExist', 'PaysPris', 'InterfacePaysRecuperer', 'NombreNewsletter', 'RecupererListeNewsletter'));
   
    }
}
