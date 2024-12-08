<?php

namespace App\Http\Controllers\ConfigurationController\BasiqueController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Utilisateurs;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class SoumettreChangementMotDePasseController extends Controller
{
    //
    public function create(Request $request)
    {
        
        // Validez les données du formulaire en utilisant les règles de validation du modèle "Utilisateurs"
        $dataEmail = $request->validate(Utilisateurs::$rulesEmail, Utilisateurs::$customEmail);
        
        // Récupérer l'adresse email de l'utilisateur à partir de la requête
        $usermail = $dataEmail['email'];
        
        // Récupérer tous les comptes
        $toutcomptes = Utilisateurs::all();

        $found = false;
        $credentials = null;

        // Boucle pour parcourir chaque compte utilisateur
        foreach ($toutcomptes as $toutcompte) {
            // Déchiffrer chaque compte utilisateur
            $mailconn = Crypt::decrypt($toutcompte->email);

            if (isset($mailconn) && $mailconn == $usermail) {
                $credentials = [
                    'email' => $toutcompte->email, // Utilisez l'adresse e-mail cryptée de la base de données
                ];

                $found = true;
                $utilisateurTrouver = $toutcompte;
                break;
            }
        }

        if (!$found) {
            // Redirection avec message d'erreur
            return back()->with('error', "Vous n'avez pas de compte.");
        }
        
        // Vérifier si un token de réinitialisation a déjà été généré pour cet utilisateur dans les 24 dernières heures
        $lastResetRequest = DB::table('password_reset_tokens')
            ->where('adresse_email', $credentials['email'])
            ->where('created_at', '>=', Carbon::now()->subDay())
            ->first();

        if (!empty($lastResetRequest)) {
            return back()->with('error', 'Vous avez déjà demandé une réinitialisation de mot de passe dans les dernières 24 heures. Veuillez réessayer dans 24 heures plus tard.');
        }


        // Appeler la fonction pour créer le token et envoyer l'email
        if ($utilisateurTrouver->TokenPasswordAndSendEmail($utilisateurTrouver)) {
            return back()->with('succes', 'Ouvrez votre boîte mail car vous avez reçu le mail de changement.');
        } else {
            return back()->with('error', 'Une erreur est survenue.');
        }
    }

}
