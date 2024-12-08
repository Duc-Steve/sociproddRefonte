<?php

namespace App\Http\Middleware\ConfigurationMiddleware;

use App\Models\Podcasts;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ExistanceIdPodcastMidd
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
       
        //recuperation du parametre IdPodcast de la rouet
        $IdPodcast = $request->route('IdPodcast');
    
        // Récupérer les informations de l'utilisateur connecter envoyées par le middleware
        $UtilisateurConnecter = $request->attributes->get('authenticated_utilisateur');

        
        //verifier l'existence du Podcast
        $existencePodcast = Podcasts::where('id_podcast', $IdPodcast)
                                    ->first();

        if(!isset($existencePodcast)) {

            return back()->with('error', "Il n'existe pas de podcast avec ces caractéristique");
            
        }else {
            
            // Envoyer les informations du membre au contrôleur via la demande
            $request->attributes->add(['IdPodcastSuccess' => $existencePodcast]);

            return $next($request);
        }
    }
}
