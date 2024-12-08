<?php

namespace App\Http\Middleware\ConfigurationMiddleware;

use Closure;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Symfony\Component\HttpFoundation\Response;

class MessageTelechargementMidd
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
         
        $cheminfichierRecuperer = 'app/' . Crypt::decrypt($request->route('Telechargerfichier'));


        $cheminFichier = storage_path($cheminfichierRecuperer);

        // Vérifier si le fichier existe
        if (File::exists($cheminFichier)) {

            // Télécharger le fichier
            return response()->download($cheminFichier);

        } else {

            // Rediriger vers la page précédente
            return back()->with('error', "Le fichier n'existe pas");
        }
    }
}
