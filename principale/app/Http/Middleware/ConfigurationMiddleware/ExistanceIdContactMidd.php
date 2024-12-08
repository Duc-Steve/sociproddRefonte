<?php

namespace App\Http\Middleware\ComitesMiddleware;

use App\Models\Contacts;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ExistanceIdContactMidd
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

    public function handle(Request $request, Closure $next): Response
    {
        //recuperation du parametre IdContact de la rouet
        $IdContact = $request->route('IdContact');
    
        // Récupérer les informations de l'utilisateur connecter envoyées par le middleware
        $UtilisateurConnecter = $request->attributes->get('authenticated_utilisateur');

        
        //verifier l'existence du Contact
        $existenceContact = Contacts::where('id_contact', $IdContact)
                                    ->first();

        if(!isset($existenceContact)) {

            return back()->with('error', "Il n'existe pas de demande de contact avec ces caractéristique");
            
        }else {
            
            // Envoyer les informations du membre au contrôleur via la demande
            $request->attributes->add(['IdContactSuccess' => $existenceContact]);

            return $next($request);
        }
    }
}
