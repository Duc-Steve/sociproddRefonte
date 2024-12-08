<?php

namespace App\Http\Middleware\ConfigurationMiddleware;

use App\Models\Actualites;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ExistanceIdActualiteMidd
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
       
        //recuperation du parametre IdActualite de la rouet
        $IdActualite = $request->route('IdActualite');
    
        // Récupérer les informations de l'utilisateur connecter envoyées par le middleware
        $UtilisateurConnecter = $request->attributes->get('authenticated_utilisateur');

        
        //verifier l'existence du Actualite
        $existenceActualite = Actualites::where('id_actualite', $IdActualite)
                                    ->first();

        if(!isset($existenceActualite)) {

            return back()->with('error', "Il n'existe pas de actualite avec ces caractéristique");
            
        }else {
            
            // Envoyer les informations du membre au contrôleur via la demande
            $request->attributes->add(['IdActualiteSuccess' => $existenceActualite]);

            return $next($request);
        }
    }
}
