<?php

namespace App\Http\Controllers\PaysController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PageSuccesController extends Controller
{
    //
    
    public function index(Request $request, $PaysUrl)
    {
        // Récupérer les informations du pays envoyées par le middleware
        $PaysDonnee = $request->attributes->get('paysRecupererVerification');
        
        // Récupérer les informations des fonctionnalités du pays envoyées par le middleware
        $FonctionaliteAcces = $request->attributes->get('fonctionnaliteAcces');
       
        // Récupérer les informations de l'entête du pays envoyées par le middleware
        $PaysEntete = $request->attributes->get('enteteDonnees');

            
        return view('interface.succesRequette', compact('PaysDonnee'));

        
    }
}
