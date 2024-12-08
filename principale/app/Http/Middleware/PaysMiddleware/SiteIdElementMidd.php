<?php

namespace App\Http\Middleware\PaysMiddleware;

use App\Models\Elements;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SiteIdElementMidd
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Récupération du paramètre IdElement de la route
        $IdElement = $request->route('IdElementSite');
        
        // Récupérer les informations du pays envoyées par le middleware
        $PaysDonnee = $request->attributes->get('paysRecupererVerification');
        
        // Vérifier l'existence de l'élément
        $existenceElement = Elements::where('pays_id', $PaysDonnee->id_pays)
                                        ->where('id_element', $IdElement)->first();

        if (!$existenceElement) {
            // Rediriger vers une URL dynamique en utilisant les données du pays
            return redirect()->route('acceuil', ['PaysUrl' => $PaysDonnee->nom_url]);
        } else {
            // Ajouter les informations de l'élément au middleware suivant
            $request->attributes->add(['IdElementSuccess' => $existenceElement]);

            return $next($request);
        }
    }
}
