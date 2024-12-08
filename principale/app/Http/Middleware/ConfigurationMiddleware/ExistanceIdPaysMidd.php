<?php

namespace App\Http\Middleware\ConfigurationMiddleware;

use App\Models\Interfaces;
use App\Models\Pays;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ExistanceIdPaysMidd
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //recuperation du parametre IdPays de la rouet
        $IdPays = $request->route('IdPays');
        
        // Récupérer les informations de l'utilisateur connecter envoyées par le middleware
        $UtilisateurConnecter = $request->attributes->get('authenticated_utilisateur');

        
        //verifier l'existence du Pays
        $existencePays = Pays::where('id_pays', $IdPays)
                                    ->first();

              
        //recuperer l'interface du pays
        $InterfacePays = Interfaces::where('pays_id', $IdPays)
                        ->first();

        if(!isset($existencePays) || !isset($InterfacePays)) {

            return redirect()->route('deconnexion');
            
        }else {
            
            // Envoyer les informations du membre au contrôleur via la demande
            $request->attributes->add(['IdPaysSuccess' => $existencePays,
                                       'InterfacePays' => $InterfacePays]);

            return $next($request);
        }
    }
}
