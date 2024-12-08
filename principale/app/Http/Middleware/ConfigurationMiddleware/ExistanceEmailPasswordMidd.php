<?php

namespace App\Http\Middleware\ComitesMiddleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
use App\Models\Utilisateurs;
use Illuminate\Support\Carbon;

class ExistanceEmailPasswordMidd
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        
        // Récupérer le token et l'email depuis les paramètres de la route
        $token = $request->route('TokenSecurite');
        $email = $request->query('email'); // L'email est passé en paramètre de requête

        // Vérifier si le token est valide
        $resetToken = DB::table('password_reset_tokens')
            ->where('token', $token)
            ->first();

        if (!$resetToken || Carbon::parse($resetToken->created_at)->addHour()->isPast()) {
            // Si le token est invalide ou a expiré, rediriger avec un message d'erreur
            return redirect()->route('change-mot-passe')->with('error', 'Le lien de réinitialisation du mot de passe est invalide ou a expiré.');
        }

        // Déchiffrer l'adresse e-mail stockée avec le token
        $emailDechiffre = Crypt::decrypt($resetToken->adresse_email);

        // Vérifier si l'adresse e-mail passée dans la requête correspond à l'adresse e-mail déchiffrée
        if ($emailDechiffre !== $email) {
            // Si l'adresse e-mail ne correspond pas, rediriger avec un message d'erreur
            return redirect()->route('change-mot-passe')->with('error', 'L\'adresse e-mail ne correspond pas.');
        }
        
        
        // Récupérer tous les comptes
        $toutcomptes = Utilisateurs::all();
    
        // Boucle pour parcourir chaque compte utilisateur
        foreach ($toutcomptes as $toutcompte) {
            // Déchiffrer chaque compte utilisateur
            $mailconn = Crypt::decrypt($toutcompte->email);
    
            // Vérifiez si $mailconn est une chaîne de caractères valide
            if (isset($mailconn) && $mailconn == $email) {
                
                $utilisateurDonnee = $toutcompte;
    
                break;
            }
        }

        if(!empty($utilisateurDonnee)) {
          
            
            // Ajouter le token validé et l'email déchiffré à la requête pour utilisation ultérieure
            $request->attributes->add(['valid_token' => $resetToken,
                                        'email' => $email, 
                                        'utilisateur' => $utilisateurDonnee]);
    
            // Passer à la requête suivante si tout est validé
            return $next($request);
            
          
        }else {
            
            return redirect()->route('change-mot-passe')->with('error', "Vous n'avez pas de compte.");
        }
    }
}
