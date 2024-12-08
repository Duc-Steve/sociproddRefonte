<?php

namespace App\Http\Controllers\ConfigurationController\UtilisateursController;

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


class ModifierDonneeUtilisateurController extends Controller
{
    //
    
    public function update(Request $request): RedirectResponse|View
    {
        
        // Récupérer les informations de l'utilisateur connecter envoyées par le middleware
        $UtilisateurConnecter = $request->attributes->get('authenticated_utilisateur');
        
        
        // Récupérer les informations de l'utilisateur envoyées par le middleware
        $RecupererUtilisateur = $request->attributes->get('IdUtilisateurSuccess');
        
        // Récupérer ancien mail
        $AncienMail = Crypt::decrypt($RecupererUtilisateur->email);

        // Validez les données du formulaire en utilisant les règles de validation du modèle "Utilisateurs"
        $dataEmail = $request->validate(Utilisateurs::$rulesEmail, Utilisateurs::$customEmail);
        
        
        //Mettre à jours 
        $RecupererUtilisateur->email = Crypt::encrypt($dataEmail['email']);
        $RecupererUtilisateur->email_verified_at = null;
        $RecupererUtilisateur->update();
        
        
        if($dataEmail['email'] != $AncienMail) {
            
            // générez et envoyez le code OTP
            $RecupererUtilisateur->ConfirmationAndPasswordAndSendEmail($RecupererUtilisateur, "-------------");
            
        }
       
  
        // Redirection vers la page précédente avec un message de succes
        return back()->with('succes', "Vous venez de changer l'adresse mail de l'utilisateur.");

        
        
    }
}
