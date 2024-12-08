<?php

namespace App\Http\Middleware\ConfigurationMiddleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\ProfilesMembreBureauExecutifs;

class ExistanceDonneeGestionProfileMidd
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        
        // Récupérer le token et l'email depuis les paramètres de la route
        $token = $request->route('TokenGestion');
        $email = $request->route('Email'); // L'email est passé en paramètre de requête

        // Vérifier si le token et email existe
        $existEmailToken = ProfilesMembreBureauExecutifs::where('email', $email)->where('token_gestion', $token)->first();
        
        // Ajouter le token validé et l'email déchiffré à la requête pour utilisation ultérieure
        $request->attributes->add(['profileDonnee' =>$existEmailToken]);

        // Passer à la requête suivante si tout est validé
        return $next($request);
         
    }
}
