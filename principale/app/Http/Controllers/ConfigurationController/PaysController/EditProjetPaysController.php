<?php

namespace App\Http\Controllers\ComitesController\InterfaceController\PaysController;

use App\Http\Controllers\Controller;
use App\Models\commentaires;
use App\Models\Pays;
use App\Models\Projets;
use App\Models\Utilisateurs;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Illuminate\Support\Facades\Crypt;


class EditProjetPaysController extends Controller
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

        // Valider les données du formulaire
        $DescriptionChop = $request->validate(Projets::$rulesDescription, Projets::$customDescription);
        
        // Obtenir la date actuelle pour inclure dans les nom des fichiers existant
        $dateActuelle = Carbon::now()->format('Y_m_d_His');
        
        $dataDescription =  Crypt::encrypt($DescriptionChop['description']);
    
        // Récuperer les projets de l'élément
        $ContenuProjet = Projets::where('element_id', $ElementPaysRecuperer->id_element)->first();

        if(!isset($ContenuProjet)) {
            

            return back()->with('error', "Il n'existe pas de projet avec ces caractéristique");
        }
    
        
        // Vérifiez s'il existe un fichier
        if ($request->hasFile('pdf_rapport')) {
            

            // Valider les données du formulaire
            $request->validate(Projets::$rulesPdf, Projets::$customPdf);
            
                
            $file = $request->file('pdf_rapport');
        
            $format = $file->getClientOriginalExtension();
        
            // Générer un nom de fichier unique pour le premier fichier PDF
            $new_file_name = "rapport_projet_". $ContenuProjet->type_projet . $dateActuelle . ".$format";

            // Enregistrer l'image avec un nom personnalisé
            $file_path = $file->storeAs("/elements/documents", $new_file_name);
                
            
            if(!isset($file_path)) {

                return back()->with('error', "Erreur d'enregistrement du rapport");

            }
            
            
        }else {
            $file_path = Crypt::decrypt($ContenuProjet->lien_pdf);
            $new_file_name = Crypt::decrypt($ContenuProjet->nom_pdf);
        }


        //condition très rigoureuse
        try {
            
            // Mémoriser la modification
            $ContenuProjet->description = $dataDescription;
            $ContenuProjet->nom_pdf = Crypt::encrypt($new_file_name);
            $ContenuProjet->lien_pdf = Crypt::encrypt($file_path);
            $ContenuProjet->statut_projet = $request->input('statut_projet');

            //enregistrer la modification
            $ContenuProjet->update();
        
            // Redirection vers la page qu'il faut avec un message de succes
            return back()->with('succes', "Vous venez de mettre à jour un projet");


        } catch (\Exception $e) {

            // Redirection vers la page précédente avec un message d'erreur si une exception est lancée
            return back()->with('error', 'Une erreur est survenue : ' /*. $e->getMessage()*/);
        }
    }
}
