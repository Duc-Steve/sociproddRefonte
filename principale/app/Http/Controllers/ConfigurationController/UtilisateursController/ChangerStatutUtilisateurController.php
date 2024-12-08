<?php

namespace App\Http\Controllers\ComitesController\InterfaceController\UtilisateursController;

use App\Http\Controllers\Controller;
use App\Models\Pays;
use App\Models\Utilisateurs;
use App\Models\ReseauxUtilisateurs;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;


class ChangerStatutUtilisateurController extends Controller
{
    //
    
    public function update(Request $request): RedirectResponse|View
    {
        
        // Récupérer les informations de l'utilisateur connecter envoyées par le middleware
        $UtilisateurConnecter = $request->attributes->get('authenticated_utilisateur');
        
        
        // Récupérer les informations de l'utilisateur envoyées par le middleware
        $RecupererUtilisateur = $request->attributes->get('IdUtilisateurSuccess');
      
      
        if($RecupererUtilisateur->etat_compte == "bannis") {
                
            //Mettre à jours 
            $RecupererUtilisateur->etat_compte = "actif";
            $RecupererUtilisateur->update();
           
        }else {
            
            //Mettre à jours 
            $RecupererUtilisateur->etat_compte = "bannis";
            $RecupererUtilisateur->update();
        }
       
  
        // Redirection vers la page précédente avec un message de succes
        return back()->with('succes', "Vous venez de changer le statut de l'utilisateur " . Crypt::decrypt($RecupererUtilisateur->nom_prenom));

        
        
    }
}
