<?php

namespace App\Http\Controllers\ComitesController\InterfaceController;

use App\Http\Controllers\Controller;
use App\Models\AppareilUtilisateurs;
use App\Models\ReseauxUtilisateurs;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;

class PageSuivieConnexionController extends Controller
{
    //
    public function index(Request $request): RedirectResponse|View
    {
        
        // Récupérer les informations de l'utilisateur connecter envoyées par le middleware
        $UtilisateurConnecter = $request->attributes->get('authenticated_utilisateur');


        // Récupérer les différentes appareil connecter au compte utilisateur , ainsi que le nombre de connexion par appareil
        $listeConnexion = ReseauxUtilisateurs::join('utilisateurs', 'utilisateurs.id_utilisateur', '=', 'reseaux_utilisateurs.utilisateur_id')
                                            ->join('appareil_utilisateurs', 'appareil_utilisateurs.reseaux_utilisateur_id', '=', 'reseaux_utilisateurs.id_reseaux_utilisateur')
                                            ->select('reseaux_utilisateurs.*', 'appareil_utilisateurs.*', 'utilisateurs.nom_prenom', 'utilisateurs.type_utilisateur')
                                            ->orderBy('appareil_utilisateurs.created_at', 'desc')
                                            ->get();
       
        //page suivie de connexion
        $SuivieConnexionExist =  true;

        return view('principale.suivieConnexion', compact('SuivieConnexionExist', 'UtilisateurConnecter', 'listeConnexion'));
   
    }
}
