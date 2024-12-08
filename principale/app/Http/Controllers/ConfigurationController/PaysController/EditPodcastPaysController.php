<?php

namespace App\Http\Controllers\ConfigurationController\PaysController;

use App\Http\Controllers\Controller;
use App\Models\commentaires;
use App\Models\Pays;
use App\Models\Podcasts;
use App\Models\Utilisateurs;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Illuminate\Support\Facades\Crypt;

class EditPodcastPaysController extends Controller
{
    //
    public function update(Request $request): RedirectResponse|View
    {
        
        // Récupérer les informations de l'utilisateur connecter envoyées par le middleware
        $UtilisateurConnecter = $request->attributes->get('authenticated_utilisateur');

        // Récupérer les informations du pays envoyées par le middleware
        $PaysPris = $request->attributes->get('IdPaysSuccess');
        
        // Récupérer les informations de l'interface pays envoyées par le middleware
        $InterfacePaysRecuperer = $request->attributes->get('InterfacePays');
        
        // Récupérer les informations de l'élément envoyées par le middleware
        $ElementPaysRecuperer = $request->attributes->get('IdElementSuccess');
        
        // Récupérer les informations du podcast envoyées par le middleware
        $PodcastPaysRecuperer = $request->attributes->get('IdPodcastSuccess');
      
        // Valider les données du formulaire
        $DescriptionChop = $request->validate(Podcasts::$rulesDescription, Podcasts::$customDescription);
        
        $dataDescription =  Crypt::encrypt($DescriptionChop['description']);
    


        //condition très rigoureuse
        try {
            
            // Mémoriser la modification
            $PodcastPaysRecuperer->description = $dataDescription;
            $PodcastPaysRecuperer->statut_podcast = $request->input('statut_podcast');

            //enregistrer la modification
            $PodcastPaysRecuperer->update();
        
            // Redirection vers la page qu'il faut avec un message de succes
            return back()->with('succes', "Vous venez de mettre à jour un podcast");


        } catch (\Exception $e) {

            // Redirection vers la page précédente avec un message d'erreur si une exception est lancée
            return back()->with('error', 'Une erreur est survenue : ' /*. $e->getMessage()*/);
        }
    }
}
