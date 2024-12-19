<?php

namespace App\Http\Middleware\ConfigurationMiddleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Utilisateurs;
use App\Models\ReseauxUtilisateurs;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class AuthentificationVerificationMidd
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Récupérer le nombre de comptes utilisateurs existants
        $nombreComptes = Utilisateurs::count();

        if ($nombreComptes == 0) {
            // Si le nombre de comptes est égal à zéro, rediriger vers la page d'inscription
            return redirect()->route('inscription');
        }

        if (auth('utilisateur')->check()) {

            // Récupérer l'utilisateur connecté
            $utilisateur = auth('utilisateur')->user();

            // Vérifier si la date de changement de mot de passe a dépassé 3 mois
            $dateExpiration = Carbon::parse(Crypt::decrypt($utilisateur->date_password))->addMonths(3);

            if (Carbon::now()->greaterThan($dateExpiration)) {
                // Déconnexion de l'utilisateur connecté
                Auth::guard('utilisateur')->logout();

                // Invalidation de la session et régénération du jeton CSRF
                $request->session()->invalidate();
                $request->session()->regenerateToken();

                // Rediriger vers la page de connexion avec un message d'erreur
                return redirect()->route('connexion')->with('error', "Vous devez changer votre mot de passe car il a expiré.");
            }
    
            // Vérification du statut du compte
            if ($utilisateur->etat_compte == "actif") {
                // Envoyer les informations de l'utilisateur au contrôleur via la demande
                $request->attributes->add(['authenticated_utilisateur' => $utilisateur]);

                return $next($request);
            } else {
                // Redirection vers la route de déconnexion si le compte n'est pas actif
                return redirect()->route('deconnexion');
            }
        }

        // Redirection vers la route de connexion si l'utilisateur n'est pas authentifié
        return redirect()->route('connexion')->with('error', "Votre session a expiré.");
    }
}
