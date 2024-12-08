<?php

namespace App\Http\Middleware\ComitesMiddleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IdentiteUtilisateurMidd
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        // Récupérer les informations de l'utilisateur connecter envoyées par le middleware
        $UtilisateurConnecter = $request->attributes->get('authenticated_utilisateur');
           
        //si l'utilisateur est un representant
        if($UtilisateurConnecter->type_utilisateur == "representant") {

            // Redirection vers la route du bilan pays si l'utilisateur est authentifié
            return redirect()->route('bilan-pays', ['IdPays' => $UtilisateurConnecter->pays_id]);

        }

        return $next($request);

    }
}
