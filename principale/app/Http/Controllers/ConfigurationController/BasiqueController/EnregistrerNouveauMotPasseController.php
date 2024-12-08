<?php

namespace App\Http\Controllers\ConfigurationController\BasiqueController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Utilisateurs;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Support\Facades\Crypt;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class EnregistrerNouveauMotPasseController extends Controller
{
    //
    public function update(Request $request): RedirectResponse|View
    {
        // Récupérer les informations du token et email envoyées par le middleware
        $tokenDonnees = $request->attributes->get('valid_token');
        $email = $request->attributes->get('email');
        $utilisateurRecuperer = $request->attributes->get('utilisateur');
        
        // Validez les données du formulaire en utilisant les règles de validation du modèle "Utilisateurs"
        $dataPassword = $request->validate(Utilisateurs::$rulesPassword, Utilisateurs::$customPassword);
        
        
        // Mettre à jour le mot de passe
        $utilisateurRecuperer->password = bcrypt($dataPassword['password']);
        $utilisateurRecuperer->date_password = Crypt::encrypt(Carbon::now()->toDateTimeString());
                
        
        if ($utilisateurRecuperer->update()) {
            
            // Redirection avec message de succès
            return redirect()->route('connexion')->with('succes', 'Votre mot de passe a été mis à jour avec succès.');
            
        } else {
            // Redirection avec message d'erreur
            return redirect()->route('connexion')->with('error', 'Une erreur est survenue. Veuillez vérifier le lien de réinitialisation.');
        }
    }

}
