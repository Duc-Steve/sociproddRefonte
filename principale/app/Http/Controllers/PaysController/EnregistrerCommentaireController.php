<?php

namespace App\Http\Controllers\SiteController;

use App\Http\Controllers\Controller;
use App\Models\Commentaires;
use App\Models\Pays;
use App\Models\Interfaces;
use App\Models\EnteteDonnees;
use App\Models\Elements;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator;

class EnregistrerCommentaireController extends Controller
{
    public function create(Request $request, $PaysUrl, $IdElementSite) 
    {
    

        // Trouver le pays correspondant à l'URL
        $TrouverPays = Pays::where('nom_url', $PaysUrl)->first();
        
        if (!$TrouverPays) {
            return response()->json(['code' => 404, 'message' => "Pays introuvable."]);
        }

        $IdElement = $request->route('IdElementSite');

        // Vérifier l'existence de l'élément
        $existenceElement = Elements::where('pays_id', $TrouverPays->id_pays)
                                    ->where('id_element', $IdElementSite)->first();

        if (!$existenceElement) {
            // Rediriger vers la page d'accueil si l'élément n'existe pas
            return redirect()->route('acceuil', ['PaysUrl' => $TrouverPays->nom_url]);
        }

        // Validation des données reçues
        $validator = Validator::make($request->all(), [
            'nomPrenom' => 'required|string|max:50',
            'email' => 'required|email|max:255',
            'commentaire' => 'required|string|max:500',
        ]);

        if ($validator->fails()) {
            return response()->json(['code' => 400, 'message' => 'Données invalides.', 'errors' => $validator->errors()]);
        }

        //condition très rigoureuse
        try {
                
            // Créer un nouveau commentaire en cryptant les informations sensibles
            Commentaires::create([
                'nom_prenom' => Crypt::encrypt($request->input('nomPrenom')),
                'adresse_mail' => Crypt::encrypt($request->input('email')),
                'description' => Crypt::encrypt($request->input('commentaire')),
                'element_id' => $existenceElement->id_element,
                'pays_id' => $TrouverPays->id_pays,
                'statut_commentaire' => 'publier'
            ]);
    
            // Retourner une réponse de succès
            return response()->json(['code' => 200, 'message' => 'Commentaire enregistré avec succès.']);
            
        
        } catch (\Exception $e) {
            
            // Redirection vers la page précédente avec un message d'erreur si une exception est lancée
            return response()->json(['code' => 400, 'message' => "Une erreur s'est produite"]);

        }
    
    }
}
