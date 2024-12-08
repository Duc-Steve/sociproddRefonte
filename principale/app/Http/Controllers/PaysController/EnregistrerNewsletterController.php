<?php

namespace App\Http\Controllers\SiteController;

use App\Http\Controllers\Controller;
use App\Models\Newsletters;
use App\Models\Pays;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator;

class EnregistrerNewsletterController extends Controller
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
            'email' => 'required|email|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json(['code' => 400, 'message' => 'Données invalides.', 'errors' => $validator->errors()]);
        }
        
        //condition très rigoureuse
        try {

            // Créer un nouveau pays
            $newNewsletter = Newsletters::create([
                'adresse_mail' => Crypt::encrypt($request->input('email')),
                'pays_id' => $TrouverPays->id_pays,
                'utilisateur_id' => null
            ]);
            
            //envoyer mail d'abonnement newsletter
            $newNewsletter->InscriptionAndSendEmail($newNewsletter);

            // Retourner une réponse de succès
            return response()->json(['code' => 200, 'message' => 'Félicitation vous venez de vous inscrire à notre newsletter.']);
            
        
        } catch (\Exception $e) {
            
            // Redirection vers la page précédente avec un message d'erreur si une exception est lancée
            return response()->json(['code' => 400, 'message' => "Une erreur s'est produite"]);

        }


    }
}
