<?php

namespace App\Http\Middleware\ComitesMiddleware;

use App\Models\Utilisateurs;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ExistanceIdUtilisateurMidd
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

    public function handle(Request $request, Closure $next): Response
    {
        //recuperation du parametre IdUtilisateur de la rouet
        $IdUtilisateur = $request->route('IdUtilisateur');
    
        // Récupérer les informations de l'utilisateur connecter envoyées par le middleware
        $UtilisateurConnecter = $request->attributes->get('authenticated_utilisateur');

        
        //verifier l'existence du Contact
        $existenceUtilisateur = Utilisateurs::where('id_utilisateur', $IdUtilisateur)
                                    ->first();

        if(!isset($existenceUtilisateur)) {

            return back()->with('error', "Il n'existe pas d'utilisateur avec ces caractéristique");
            
        }else {
            
            // Envoyer les informations du membre au contrôleur via la demande
            $request->attributes->add(['IdUtilisateurSuccess' => $existenceUtilisateur]);

            return $next($request);
        }
    }
}
