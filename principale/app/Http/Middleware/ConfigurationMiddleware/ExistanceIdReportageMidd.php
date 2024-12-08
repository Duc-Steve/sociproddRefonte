<?php

namespace App\Http\Middleware\ComitesMiddleware;

use App\Models\Reportages;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ExistanceIdReportageMidd
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    
    public function handle(Request $request, Closure $next): Response
    {
    
        //recuperation du parametre IdReportage de la rouet
        $IdReportage = $request->route('IdReportage');
    
        // Récupérer les informations de l'utilisateur connecter envoyées par le middleware
        $UtilisateurConnecter = $request->attributes->get('authenticated_utilisateur');

        
        //verifier l'existence du Reportage
        $existenceReportage = Reportages::where('id_reportage', $IdReportage)
                                    ->first();

        if(!isset($existenceReportage)) {

            return back()->with('error', "Il n'existe pas de reportage avec ces caractéristique");
            
        }else {
            
            // Envoyer les informations du membre au contrôleur via la demande
            $request->attributes->add(['IdReportageSuccess' => $existenceReportage]);

            return $next($request);
        }
    }
}
