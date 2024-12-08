<?php

namespace App\Http\Controllers\ComitesController\InterfaceController\PaysController;

use App\Http\Controllers\Controller;
use App\Models\commentaires;
use App\Models\Pays;
use App\Models\Podcasts;
use App\Models\Reportages;
use App\Models\Utilisateurs;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Illuminate\Support\Facades\Crypt;

class EditReportagePaysController extends Controller
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
        
        // Récupérer les informations du reportage envoyées par le middleware
        $ReportagePaysRecuperer = $request->attributes->get('IdReportageSuccess');
        
    
        // Valider les données du formulaire
        $DescriptionChop = $request->validate(Reportages::$rulesDescription, Reportages::$customDescription);
        
        $dataDescription =  Crypt::encrypt($DescriptionChop['description']);
    



        //condition très rigoureuse
        try {
            
            // Mémoriser la modification
            $ReportagePaysRecuperer->description = $dataDescription;
            $ReportagePaysRecuperer->statut_reportage = $request->input('statut_reportage');

            //enregistrer la modification
            $ReportagePaysRecuperer->update();
        
            // Redirection vers la page qu'il faut avec un message de succes
            return back()->with('succes', "Vous venez de mettre à jour un reportage");


        } catch (\Exception $e) {

            // Redirection vers la page précédente avec un message d'erreur si une exception est lancée
            return back()->with('error', 'Une erreur est survenue : ' /*. $e->getMessage()*/);
        }
    }
}
