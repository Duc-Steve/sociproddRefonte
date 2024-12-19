<?php

namespace App\Http\Controllers\ConfigurationController\BasiqueController;

use App\Http\Controllers\Controller;
use App\Models\AppareilUtilisateurs;
use App\Models\ReseauxUtilisateurs;
use App\Models\Pays;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Auth;
use App\Models\Utilisateurs;
use \Detection\MobileDetect;
use WhichBrowser\Parser;


class GenererSessionConnexionController extends Controller
{
    public function session(Request $request): RedirectResponse|View
    {
        // Valider les données du formulaire
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required', // Assurez-vous que le mot de passe est requis
        ], [
            'email.required' => 'L\'adresse e-mail est requise.',
            'email.email' => 'L\'adresse e-mail doit être valide.',
            'password.required' => 'Le mot de passe est requis.', // Message d'erreur pour le mot de passe
        ]);

        // Vérifie si la case "se souvenir de moi" est cochée
        $remember = $request->filled('remember'); 

        // Associer l'email saisi à une variable
        $usermail = $request->input('email');

        //condition très rigoureuse
        try {

            // Récupérer tous les comptes
            $toutcomptes = Utilisateurs::all();

            // Boucle pour parcourir chaque compte utilisateur
            foreach ($toutcomptes as $toutcompte) {
                // Déchiffrer chaque compte utilisateur
                $mailconn = Crypt::decrypt($toutcompte->email);

                // Vérifiez si $mailconn est une chaîne de caractères valide
                if (isset($mailconn) && $mailconn == $usermail) {
                    // Créer des credentials pour l'authentification interne de Laravel
                    $credentials = [
                        'email' => $toutcompte->email, // Utilisez l'adresse e-mail cryptée de la base de données
                        'password' => $request->input('password'), // Assurez-vous d'utiliser le bon champ pour le mot de passe
                    ];

                    // Créer une variable trouvée
                    $found = true;

                    break;
                }
            }

            if (!isset($found) || !isset($credentials)) {

                // Redirection avec message d'erreur
                return back()->with('error', "Vous n'avez pas de compte.");
            }

            // Vérifiez si l'utilisateur est vérifié
            $user = Utilisateurs::where('email', $credentials['email'])->first();

            $detect = new MobileDetect;
            $deviceType = $detect->isMobile() ? 'Téléphone' : ($detect->isTablet() ? 'Tablette' : 'Ordinateur');
            
            
            $userAgent = $request->header('User-Agent');
            $result = new Parser($userAgent);

            // Extraire les informations spécifiques du résultat
            $browserName = $result->browser->name ?? 'Inconnu';
            $browserVersion = $result->browser->version->value ?? 'Inconnu';
            $osName = $result->os->name ?? 'Inconnu';
            $osVersion = $result->os->version->value ?? 'Inconnu';
            //$deviceType = $result->device->type ?? 'Inconnu';
            $deviceManufacturer = $result->device->manufacturer ?? 'Inconnu';
            $deviceModel = $result->device->model ?? 'Inconnu';

            // Préparer les données du système d'exploitation combinées pour l'enregistrement
            $systemeExploitation = [
                'type_systeme_dexploitation' => Crypt::encrypt($osName),
                'version_systeme_dexploitation' => Crypt::encrypt($osVersion),
            ];

            // Préparer les données du navigateur combinées pour l'enregistrement
            $navigateur = [
                'type_navigateur' => Crypt::encrypt($browserName),
                'version_navigateur' => Crypt::encrypt($browserVersion),
            ];

            // Préparer les données de l'appareil combinées pour l'enregistrement
            $appareil = [
                'type_appareil' => Crypt::encrypt($deviceType),
                'marque_appareil' => Crypt::encrypt($deviceManufacturer),
                'model_appareil' => Crypt::encrypt($deviceModel),
            ];
            
            //Former le tableau des donnees 
            $DonneFormerMAilSecurite = [
                'type_navigateur' => Crypt::encrypt($browserName),
                'type_systeme_dexploitation' => Crypt::encrypt($osName),
                'version_systeme_dexploitation' => Crypt::encrypt($osVersion),
                'type_appareil' => Crypt::encrypt($deviceType),
            ];

            // Envoyer un email à l'utilisateur pour signaler la nouvelle connexion
            //if($user->TentativeConnexionAutreAndSendEmail($user, $DonneFormerMAilSecurite, $request->ip())){
                
                //verifier l'etat du compte
                if($user->etat_compte == "actif") {
                

                    if ($user && $user->email_verified_at) {
        
                        // Tentative de connexion avec les informations fournies
                        if (Utilisateurs::login($credentials, $remember) == true) {
                                                            
                            // Authentification réussie
                            $request->session()->regenerate();

                            // Si l'utilisateur est un représentant
                            if ($user->type_utilisateur == "representant") {

                                //Verifions si le pays associer compte du representant existe
                                $existencePays = Pays::where('id_pays', $user->pays_id)
                                                    ->first();

                                if(!isset($existencePays)) {

                                    // Redirection avec message d'erreur
                                    return back()->with('error', "Cher représentant votre pays n'existe pas!.");
                                
                                }

                                // Redirection vers la page d'accueil pour les représentants
                                return redirect()->route('bilan-pays', ['IdPays' => $user->pays_id]);

                            } else {
                                // Redirection vers le tableau de bord
                                return redirect()->route('tableau-bord');
                            }
                                                    
                        } else {
                            // Redirection avec message d'erreur
                            return back()->with('error', 'Les informations de connexion sont incorrectes.');
                        }
                    } else {
                        // Redirection avec message d'erreur
                        return back()->with('error', "Vous n'avez pas vérifié votre compte.");
                    }
                    
        
                }else {
                        
                    // Redirection avec message d'erreur
                    return back()->with('error', "Votre compte est inaccessible pour de multiple raison, contacter l'organisation pour en savoir plus.");
                }
                    
            /*}else {
                    
                return back()->with('error', 'Une erreur est survenue');
                    
            }*/
                    
        } catch (\Exception $e) {
            // Redirection vers la page précédente avec un message d'erreur si une exception est lancée
            return back()->with('error', 'Une erreur est survenue : ' .$e->getMessage());
        }
    }
}
