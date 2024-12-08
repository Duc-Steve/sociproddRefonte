<?php

namespace App\Http\Controllers\ComitesController\InterfaceController\PaysController;

use App\Http\Controllers\Controller;
use App\Models\Utilisateurs;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;


class ChangeStatutElementPaysController extends Controller
{
    //
    public function update(Request $request, $IdPays): RedirectResponse
    {
        
        // Récupérer les informations de l'utilisateur connecter envoyées par le middleware
        $UtilisateurConnecter = $request->attributes->get('authenticated_utilisateur');

        // Récupérer les informations du pays envoyées par le middleware
        $PaysPris = $request->attributes->get('IdPaysSuccess');
        
        // Récupérer les informations de l'interface pays envoyées par le middleware
        $InterfacePaysRecuperer = $request->attributes->get('InterfacePays');
        
        // Récupérer les informations de l'élément envoyées par le middleware
        $ElementPaysRecuperer = $request->attributes->get('IdElementSuccess');

        
        try {
            
            if($ElementPaysRecuperer->statut_element == $request->input('statut_element')) {

                //si le statut sélectionner est la même que celui enregistrer
                return back()->with('error',  "Le statut de l'élémént " . Crypt::decrypt($ElementPaysRecuperer->reference_unique) . " n'a pas changer");
            }

            // Si le pays n'est pas actif, le mettre à l'état "actif"
            $ElementPaysRecuperer->statut_element = $request->input('statut_element');

            // Mettre à jour le statut du pays dans la base de données
            $ElementPaysRecuperer->update();
    
            
            // Si la mise à jour réussit, afficher un message de succès
            return back()->with('succes', "Vous venez de mettre à jour le statut de l'élément " . Crypt::decrypt($ElementPaysRecuperer->reference_unique));
    
        
        } catch (\Exception $e) {
          
            // Redirection vers la page précédente avec un message d'erreur si une exception est lancée
            return back()->with('error', 'Une erreur est survenue : ' /*. $e->getMessage()*/ );
        }
        
    }
}
