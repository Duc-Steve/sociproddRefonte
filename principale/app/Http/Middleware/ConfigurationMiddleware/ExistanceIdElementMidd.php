<?php

namespace App\Http\Middleware\ComitesMiddleware;

use App\Models\Elements;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ExistanceIdElementMidd
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //recuperation du parametre IdElement de la rouet
        $IdElement = $request->route('IdElement');
    
        // Récupérer les informations de l'utilisateur connecter envoyées par le middleware
        $UtilisateurConnecter = $request->attributes->get('authenticated_utilisateur');

        
        //verifier l'existence du Element
        $existenceElement = Elements::where('id_element', $IdElement)
                                    ->first();

        if(!isset($existenceElement)) {

            return back()->with('error', "Il n'existe pas d'élément avec ces caractéristique");
            
        }else {
            
            // Envoyer les informations du membre au contrôleur via la demande
            $request->attributes->add(['IdElementSuccess' => $existenceElement]);

            return $next($request);
        }
    }
}
