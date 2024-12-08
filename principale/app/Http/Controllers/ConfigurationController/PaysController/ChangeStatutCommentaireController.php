<?php

namespace App\Http\Controllers\ComitesController\InterfaceController\PaysController;

use App\Http\Controllers\Controller;
use App\Models\Commentaires;
use App\Models\Utilisateurs;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;


class ChangeStatutCommentaireController extends Controller
{
    //
    
    public function update(Request $request, $IdPays, $IdCommentaire): RedirectResponse
    {
        
        // Récupérer les informations de l'utilisateur connecter envoyées par le middleware
        $UtilisateurConnecter = $request->attributes->get('authenticated_utilisateur');

        // Récupérer les informations du pays envoyées par le middleware
        $PaysPris = $request->attributes->get('IdPaysSuccess');
        
        // Récupérer les informations de l'interface pays envoyées par le middleware
        $InterfacePaysRecuperer = $request->attributes->get('InterfacePays');
        
        // Récupérer les informations de l'élément envoyées par le middleware
        $ElementPaysRecuperer = $request->attributes->get('IdElementSuccess');

        // Vérifier l'existence du commentaire
        $ExistenceCommentaire = Commentaires::where('id_commentaire', $IdCommentaire)->first();
        
        if(!$ExistenceCommentaire) {
            
            return back()->with('error', 'Aucun commentaire trouver avec ses caractéristique');
        }
        
        try {
            
            if($ExistenceCommentaire->statut_commentaire == "publier") {

                // Si le commentaire est publier, le mettre à l'état supprimer
                $ExistenceCommentaire->statut_commentaire = "supprimer";
                
            }else {
                
                // Sinon
                $ExistenceCommentaire->statut_commentaire = "publier";
            }


            // Mettre à jour le statut du commentaire dans la base de données
            $ExistenceCommentaire->update();
    
            
            // Si la mise à jour réussit, afficher un message de succès
            return back()->with('succes', "Vous venez de " . $ExistenceCommentaire->statut_commentaire . " un commentaire");
    
        
        } catch (\Exception $e) {
          
            // Redirection vers la page précédente avec un message d'erreur si une exception est lancée
            return back()->with('error', 'Une erreur est survenue : ' /*. $e->getMessage()*/ );
        }
    }
}