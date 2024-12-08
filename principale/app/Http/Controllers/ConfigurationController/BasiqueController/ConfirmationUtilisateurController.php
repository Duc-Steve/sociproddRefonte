<?php

namespace App\Http\Controllers\ConfigurationController\BasiqueController;

use App\Http\Controllers\Controller;
use App\Models\Utilisateurs;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class ConfirmationUtilisateurController extends Controller
{
    //
    public function confirmation(Request $request, $Email): RedirectResponse|View
    {
        // Récupérer tous les comptes utilisateurs existants
        $utilisateurs = Utilisateurs::all();

        // Parcourir chaque compte utilisateur existant
        foreach ($utilisateurs as $utilisateur) {
            // Décrypter l'email de chaque compte utilisateur
            $emailDecrypte = Crypt::decrypt($utilisateur->email);

            // Vérifier si l'email décrypté correspond à l'email fourni dans la requête
            if (isset($emailDecrypte) && $emailDecrypte === $Email) {

                // Vérifier si l'email n'a pas encore été confirmé
                if (is_null($utilisateur->email_verified_at)) {
                    // Mettre à jour l'heure de confirmation de l'email
                    $utilisateur->email_verified_at = Carbon::now();
                    $utilisateur->save();

                    // Message de confirmation réussie
                    $message = "Cher utilisateur, vous venez de confirmer votre adresse e-mail. Vous pouvez maintenant vous connecter.";
                    
                    return view('principale.utilisateurs.mailConfirmationOrError', compact('message'));
                } else {
                    // Message si l'email a déjà été confirmé
                    $message = "Cher utilisateur, votre adresse e-mail a déjà été confirmée.";

                    return view('principale.utilisateurs.mailConfirmationOrError', compact('message'));
                }
            }
        }

        // Message si l'email n'existe pas dans la base de données
        $message = "Cher utilisateur, votre compte n'existe pas.";

        return view('principale.utilisateurs.mailConfirmationOrError', compact('message'));
    }
}