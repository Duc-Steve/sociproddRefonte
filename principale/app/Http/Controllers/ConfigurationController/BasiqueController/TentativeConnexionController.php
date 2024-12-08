<?php


namespace App\Http\Controllers\ConfigurationController\BasiqueController;

use App\Http\Controllers\Controller;
use App\Models\ReseauxUtilisateurs;
use App\Models\Utilisateurs;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class TentativeConnexionController extends Controller
{
    public function tentative(Request $request, $IdReseaux, $TokenSecurite, $securite): RedirectResponse|View
    {
        
        // Séparer le TokenSecurite en ID et Token
        [$idPart, $tokenPart] = explode('|', $TokenSecurite);
        
        // Hash du token part pour correspondre au format stocké
        $hashedTokenPart = hash('sha256', $tokenPart);
            
        //Récuperer les données assicier a l'ID du reseaux
        $reseauxRecuperer = ReseauxUtilisateurs::where('id_reseaux_utilisateur', $IdReseaux)->first();
        
        if(!empty($reseauxRecuperer)) {
            
        
            // Vérifier si c'est la même adresse IP
            if ($request->ip() != Crypt::decrypt($reseauxRecuperer->ip_address)) {
                return redirect()->route('connexion')->with('error', "Vous devez utiliser le même réseau pour valider ou infirmer la sécurité.");
            }
    
            // Chercher l'utilisateur basé sur l'IdAppareil
            $utilisateur = Utilisateurs::where('id_utilisateur', $reseauxRecuperer->utilisateur_id)->first();
    
            
            // Vérifier si le token est valide
            if (!$utilisateur->tokens()->where('id', $idPart)->where('token', $hashedTokenPart)->exists()) {
                // Si le token n'est pas valide, rediriger avec un message d'erreur
                return redirect()->route('connexion')->with('error', "Token de sécurité invalide ou expiré.");
            }
            
            // Si l'utilisateur a confirmé la tentative de connexion
            if ($securite === 'oui') {
    
                $reseauxRecuperer->securite = Crypt::encrypt("oui");
                $reseauxRecuperer->update();
                
                // Invalider le token après utilisation
                $utilisateur->tokens()->where('id', $idPart)->where('token', $hashedTokenPart)->delete();
    
                // Redirection vers le tableau de bord ou autre page appropriée avec un message de succès
                return redirect()->route('connexion')->with('succes', "Réseaux valider. Vous pouvez vous connecter maintenant.");
    
            } elseif ($securite === 'non') {
    
                $reseauxRecuperer->securite = Crypt::encrypt("non");
                $reseauxRecuperer->update();
    
                // Invalider le token après utilisation
                $utilisateur->tokens()->where('id', $idPart)->where('token', $hashedTokenPart)->delete();
    
                // Redirection vers la page de connexion avec un message de refus
                return redirect()->route('connexion')->with('error', "Vous avez refusé la tentative de connexion. Aucun accès n'a été accordé.");
    
            } else {
                // Redirection en cas de valeur inattendue pour 'securite'
                return redirect()->route('connexion')->with('error', "Action non reconnue. Veuillez réessayer.");
            }
            
        }else {
            
            // Si l'adresse IP n'existe pas dans les réseaux enregistrés
            return redirect()->route('connexion')->with('error', "L'adresse IP n'existe pas dans nos enregistrements. Tentative de connexion refusée.");
                
        }

    }

}
