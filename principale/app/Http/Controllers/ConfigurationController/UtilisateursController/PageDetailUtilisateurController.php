<?php

namespace App\Http\Controllers\ComitesController\InterfaceController\UtilisateursController;

use App\Http\Controllers\Controller;
use App\Models\Pays;
use App\Models\Utilisateur;
use App\Models\ReseauxUtilisateurs;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;


class PageDetailUtilisateurController extends Controller
{
    //
    
    public function index(Request $request): RedirectResponse|View
    {
        
        // Récupérer les informations de l'utilisateur connecter envoyées par le middleware
        $UtilisateurConnecter = $request->attributes->get('authenticated_utilisateur');
        
        // Récupérer les informations de l'utilisateur envoyées par le middleware
        $RecupererUtilisateur = $request->attributes->get('IdUtilisateurSuccess');

        // Récupérer les différentes appareil connecter au compte utilisateur , ainsi que le nombre de connexion par appareil
        $ReseauxConnexion = ReseauxUtilisateurs::join('utilisateurs', 'utilisateurs.id_utilisateur', '=', 'reseaux_utilisateurs.utilisateur_id')
                                            ->join('appareil_utilisateurs', 'appareil_utilisateurs.reseaux_utilisateur_id', '=', 'reseaux_utilisateurs.id_reseaux_utilisateur')
                                            ->where('reseaux_utilisateurs.utilisateur_id', $RecupererUtilisateur->id_utilisateur)
                                            ->select('reseaux_utilisateurs.*', 'utilisateurs.nom_prenom', 'utilisateurs.type_utilisateur', DB::raw('COUNT(appareil_utilisateurs.id_appareil_utilisateur) as nombre_connexions'))
                                            ->groupBy('reseaux_utilisateurs.id_reseaux_utilisateur', 'reseaux_utilisateurs.ip_address', 'reseaux_utilisateurs.securite', 'reseaux_utilisateurs.utilisateur_id', 'reseaux_utilisateurs.created_at', 'reseaux_utilisateurs.updated_at', 'utilisateurs.nom_prenom', 'utilisateurs.type_utilisateur')
                                            ->orderBy('reseaux_utilisateurs.created_at', 'desc')
                                            ->get();
        
        //page utilisateur
        $UtilisateurExist =  true;

        return view('principale.utilisateurs.detailUtilisateur', compact('UtilisateurExist', 'UtilisateurConnecter', 'ReseauxConnexion', 'RecupererUtilisateur'));
   
    }
}
