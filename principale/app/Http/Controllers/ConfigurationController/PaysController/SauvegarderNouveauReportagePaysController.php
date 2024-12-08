<?php

namespace App\Http\Controllers\ComitesController\InterfaceController\PaysController;

use App\Http\Controllers\Controller;
use App\Models\commentaires;
use App\Models\Reportages;
use App\Models\Pays;
use App\Models\Utilisateurs;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Illuminate\Support\Facades\Crypt;



class SauvegarderNouveauReportagePaysController extends Controller
{
    //
    public function create(Request $request): RedirectResponse|View
    {
        
        // Récupérer les informations de l'utilisateur connecter envoyées par le middleware
        $UtilisateurConnecter = $request->attributes->get('authenticated_utilisateur');

        // Récupérer les informations du pays envoyées par le middleware
        $PaysPris = $request->attributes->get('IdPaysSuccess');
        
        // Récupérer les informations de l'interface pays envoyées par le middleware
        $InterfacePaysRecuperer = $request->attributes->get('InterfacePays');
        
        // Récupérer les informations de l'élément envoyées par le middleware
        $ElementPaysRecuperer = $request->attributes->get('IdElementSuccess');

        // Validez les données du formulaire en utilisant les règles de validation du modèle "Reportages"
        $dataVideo = $request->validate(Reportages::$rulesVideo, Reportages::$customVideo);
        
        // Vérifiez s'il existe une Description
        if (!empty($request->input('description'))) {

            // Valider les données du formulaire
            $DescriptionChop = $request->validate(Reportages::$rulesDescription, Reportages::$customDescription);
            
            $dataDescription =  $DescriptionChop['description'];
            
        }else {
            $dataDescription = null;
        }

        //condition très rigoureuse
        try {
            
            // Mémoriser l'élément
            $newReportagePays = Reportages::create([
                'description' => Crypt::encrypt($dataDescription),
                'lien_video' => Crypt::encrypt($dataVideo['video']),
                'element_id' => $ElementPaysRecuperer->id_element,
                'utilisateur_id' => $UtilisateurConnecter->id_utilisateur,
            ]);

        
            // Redirection vers la page qu'il faut avec un message de succes
            return back()->with('succes', "Vous venez d'enregistrer un reportage");


        } catch (\Exception $e) {

            // Redirection vers la page précédente avec un message d'erreur si une exception est lancée
            return back()->with('error', 'Une erreur est survenue : ' /*. $e->getMessage()*/);
        }
    }
}
