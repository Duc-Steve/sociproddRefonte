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


class MiseJourMonCompteController extends Controller
{
    //
    
    public function update(Request $request): RedirectResponse|View
    {
        
        // Récupérer les informations de l'utilisateur connecter envoyées par le middleware
        $UtilisateurConnecter = $request->attributes->get('authenticated_utilisateur');
        

        // Validez les données du formulaire en utilisant les règles de validation du modèle "Utilisateurs"
        $dataUser = $request->validate(Utilisateurs::$rulesNomPrenom, Utilisateurs::$customNomPrenom);
        $dataEmail = $request->validate(Utilisateurs::$rulesEmail, Utilisateurs::$customEmail);
        $dataNumeros = $request->validate(Utilisateurs::$rulesNumerosA, Utilisateurs::$customNumerosA);
        $dataWhatsapp = $request->validate(Utilisateurs::$rulesWhatsapp, Utilisateurs::$customWhatsapp);
        $dataPays = $request->validate(Utilisateurs::$rulesPays, Utilisateurs::$customPays);
        $dataVille = $request->validate(Utilisateurs::$rulesVille, Utilisateurs::$customVille);
        $dataAdresse = $request->validate(Utilisateurs::$rulesAdresse, Utilisateurs::$customAdresse);
        $dataPoste = $request->validate(Utilisateurs::$rulesPoste, Utilisateurs::$customPoste);
        
        
        //Mettre à jours 
        $UtilisateurConnecter->nom_prenom = Crypt::encrypt($dataUser['nom_prenom']); 
        $UtilisateurConnecter->pays = Crypt::encrypt($dataPays['nom_correct_pays']);
        $UtilisateurConnecter->ville = Crypt::encrypt($dataVille['ville']);
        $UtilisateurConnecter->adresse = Crypt::encrypt($dataAdresse['adresse']);
        $UtilisateurConnecter->sexe = Crypt::encrypt(null);
        $UtilisateurConnecter->email = Crypt::encrypt($dataEmail['email']);
        $UtilisateurConnecter->numeros = Crypt::encrypt($dataNumeros['numeros_contact']);
        $UtilisateurConnecter->whatsapp = Crypt::encrypt($dataWhatsapp['whatsapp']);
        $UtilisateurConnecter->poste = Crypt::encrypt($dataPoste['poste']);
        $UtilisateurConnecter->update();
       
  
        // Redirection vers la page précédente avec un message de succes
        return back()->with('succes', 'Vous venez de mettre à jours votre compte.');

        
        
    }
}
