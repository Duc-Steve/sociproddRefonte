<?php

namespace App\Http\Middleware;

use App\Models\EnteteDonnees;
use App\Models\Interfaces;
use App\Models\Pays;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Symfony\Component\HttpFoundation\Response;

class AccesInterfacePaysUrlMidd
{
    /**
     * Gère une requête entrante.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Récupération du paramètre PaysUrl de la route
        $PaysUrl = $request->route('PaysUrl');

        // Trouver pays
        $TrouverPays = Pays::where('nom_url', $PaysUrl)->first();
        
        if($TrouverPays) {
                                
            // Trouver reference interface pays
            $TrouverInterface = Interfaces::where('pays_id', $TrouverPays->id_pays)->first();
            
            // Trouver les informations d'entete du pays 
            $TrouverEntete = EnteteDonnees::where('pays_id', $TrouverPays->id_pays)->first();
    
            // Verifier s'il existe/defini les données
            if(!empty($TrouverPays) && !empty($TrouverInterface) && !empty($TrouverEntete)) {
                    
                // Envoyer les informations du membre au contrôleur via la demande
                $request->attributes->add(['paysRecupererVerification' =>  $TrouverPays,
                                        'fonctionnaliteAcces' =>  $TrouverInterface,
                                        'enteteDonnees' => $TrouverEntete]);
                    
                return $next($request);

            }
            
        }
  
        return response()->view('errors.404', ['message' => "Une erreur s'est produite. Veuillez réessayer plus tard"]);
                
    }
}
