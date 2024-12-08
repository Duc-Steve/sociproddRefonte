<?php

namespace App\Http\Controllers\ConfigurationController\BasiqueController;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Support\Facades\Crypt;


use App\Models\Utilisateurs;
use Carbon\Carbon;

class CreationCompteConfigurationController extends Controller
{
    //
    public function create(Request $request): RedirectResponse|View
    {

        // Validez les données du formulaire en utilisant les règles de validation du modèle "Utilisateurs"
        $dataUser = $request->validate(Utilisateurs::$rulesNomPrenom, Utilisateurs::$customNomPrenom);
        $dataEmail = $request->validate(Utilisateurs::$rulesEmail, Utilisateurs::$customEmail);
        $dataPassword = $request->validate(Utilisateurs::$rulesPassword, Utilisateurs::$customPassword);
        $dataRegleConfirme = $request->validate(Utilisateurs::$rulesRegleConfirme, Utilisateurs::$customRegleConfirme);

        //recuperation de lannee actuelle
        $dateAnnee = date('Y');

        //création du matricule
        $chiffre_aleatoire = rand(100000, 999999);
        $Matricule = "A-U" . $dateAnnee . $chiffre_aleatoire;

        //condition très rigoureuse
        try {

            // Créer un nouveau compte utilisateur
            $newUtilisateur = Utilisateurs::create([
                'matricule' => Crypt::encrypt($Matricule),
                'nom_prenom' => Crypt::encrypt($dataUser['nom_prenom']),
                'pays' => Crypt::encrypt(null),
                'ville' => Crypt::encrypt(null),
                'adresse' => Crypt::encrypt(null),
                'sexe' => Crypt::encrypt(null),
                'email' => Crypt::encrypt($dataEmail['email']),
                'numeros' => Crypt::encrypt(null),
                'whatsapp' => Crypt::encrypt(null),
                'nom_dossier' => Crypt::encrypt(null),
                'lien_dossier' => Crypt::encrypt(null),
                'password' => bcrypt($dataPassword['password']),
                'date_password' => Crypt::encrypt(Carbon::now()->toDateTimeString()), 
                'type_utilisateur' => "administrateur",
                'poste' => Crypt::encrypt("DSI"),
                'pays_id' => null,
                'utilisateur_id' => null
            ]);


            // générez et envoyez le code OTP
            if ($newUtilisateur->ConfirmationAndPasswordAndSendEmail($newUtilisateur, "-------------")) {

                // Redirection vers la route de connexion si la création est réussie
                return redirect()->route('connexion')->with('succes', "Le compte administrateur à été créer avec succès");

            }else {


                // Redirection vers la page précédente avec un message de erreur
                return back()->with('error', "Erreur s'est produite l'Hors de l'envoie du mail de confirmation.");
                
            }

        } catch (\Exception $e) {
            
            //supprimer le compte de l'utilisateur
            $newUtilisateur->delete();

            // Redirection vers la page précédente avec un message d'erreur si une exception est lancée
            return back()->with('error', 'Une erreur est survenue : ' /*. $e->getMessage()*/);
        }
        
    }
}
