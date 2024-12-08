<?php

namespace App\Http\Controllers\ConfigurationController\PaysController;

use App\Http\Controllers\Controller;
use App\Models\Utilisateurs;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;


class ChangerStatutPaysController extends Controller
{
    //
    
    public function update(Request $request, $IdPays): RedirectResponse
    {
        
        // Récupérer les informations de l'utilisateur connecter envoyées par le middleware
        $UtilisateurConnecter = $request->attributes->get('authenticated_utilisateur');

        // Récupérer les informations du membre envoyées par le middleware
        $PaysPris = $request->attributes->get('IdPaysSuccess');

        
        //try {
            // Vérifie l'état du pays 
            if ($PaysPris->statut_pays == "actif") {
                
                // Si le pays est actif, le mettre à l'état "inactif"
                $PaysPris->statut_pays = "inactif";
                
                // Mettre à jour le statut du pays dans la base de données
                $PaysPris->update();
            
                if ($PaysPris) {

                    //Récupérer tous les comptes associer au pays
                    $toutcomptes = Utilisateurs::where('pays_id', $PaysPris->id_pays)->get();

                    // Boucle pour parcourir chaque compte utilisateur
                    foreach ($toutcomptes as $toutcompte) {
                        
                        //si le compte de l'utilisateur est actif
                        if($toutcompte->etat_compte == "actif") {
                            
                            //mettre à jour le statut du compte
                            $toutcompte->etat_compte = "inactif";
                            $toutcompte->update();
                            
                            //envoie du mail d'information
                            $toutcompte->DesactivationCompteAndSendEmail($toutcompte);
                        }
                    }
                    
                    // Si la mise à jour réussit, afficher un message de succès
                    return back()->with('succes', "Vous venez de mettre à jour le statut du pays ( " . Crypt::decrypt($PaysPris->nom_normale) . " ) en " . $PaysPris->statut_pays);

                } else {
                    
                    // Si la mise à jour échoue, afficher un message d'erreur
                    return back()->with('error', 'Échec de la mise à jour du pays, veuillez réessayer plus tard');
                }
            } else {
                // Si le pays n'est pas actif, le mettre à l'état "actif"
                $PaysPris->statut_pays = "actif";

                // Mettre à jour le statut du pays dans la base de données
                $PaysPris->update();
        
                if ($PaysPris) {

                    //Récupérer tous les comptes associer au pays
                    $toutcomptes = Utilisateurs::where('pays_id', $PaysPris->id_pays)->get();

                    // Boucle pour parcourir chaque compte utilisateur
                    foreach ($toutcomptes as $toutcompte) {
                        
                        if($toutcompte->etat_compte == "inactif") {

                            //mettre à jour le statut du compte
                            $toutcompte->etat_compte = "actif";
                            $toutcompte->update();
                            
                            
                            //envoie du mail d'information
                            $toutcompte->ActivationCompteAndSendEmail($toutcompte);
                            
                        }
                    }
                    
                    // Si la mise à jour réussit, afficher un message de succès
                    return back()->with('succes', "Vous venez de mettre à jour le statut du pays ( " . Crypt::decrypt($PaysPris->nom_normale) . " ) en " . $PaysPris->statut_pays);

                } else {
                    
                    // Si la mise à jour échoue, afficher un message d'erreur
                    return back()->with('error', 'Échec de la mise à jour du pays, veuillez réessayer plus tard');
                }
            }
        
        /*} catch (\Exception $e) {
          
            // Redirection vers la page précédente avec un message d'erreur si une exception est lancée
            return back()->with('error', 'Une erreur est survenue : ' /*. $e->getMessage());
        }*/
        
    }
}
