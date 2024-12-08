<?php

namespace App\Http\Controllers\PaysController;

use App\Http\Controllers\Controller;
use App\Models\Contacts;
use App\Models\Pays;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator;

class EnregistrerDemandeContactController extends Controller
{
    //
    public function create(Request $request, $PaysUrl)
    {
        
        // Trouver le pays correspondant à l'URL
        $TrouverPays = Pays::where('nom_url', $PaysUrl)->first();
        
        if (!$TrouverPays) {
            return response()->json(['code' => 404, 'message' => "Pays introuvable."]);
        }

        // Validation des données reçues
        $validator = Validator::make($request->all(), [
            'nomPrenom' => 'required|string|max:50',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:500',
            'sujet' => 'required|string|max:100',
        ]);

        if ($validator->fails()) {
            return response()->json(['code' => 400, 'message' => 'Données invalides.', 'errors' => $validator->errors()]);
        }
        //condition très rigoureuse
        try {

            // Créer un nouveau pays
            $newDemandeContact = Contacts::create([
                'nom_prenom' => Crypt::encrypt($request->input('nom_prenom')),
                'adresse_mail' => Crypt::encrypt($request->input('email')),
                'sujet' => Crypt::encrypt($request->input('sujet')),
                'message' => Crypt::encrypt($request->input('message')),
                'pays_id' => $TrouverPays->id_pays,
                'utilisateur_id' => null
            ]);

    
            // Retourner une réponse de succès
            return response()->json(['code' => 200, 'message' => 'Cher utilisateur nous allons prendre connaissance de votre requête dans un instant.']);
            
        
        } catch (\Exception $e) {
            
            // Redirection vers la page précédente avec un message d'erreur si une exception est lancée
            return response()->json(['code' => 400, 'message' => "Une erreur s'est produite"]);

        }

    }

}
