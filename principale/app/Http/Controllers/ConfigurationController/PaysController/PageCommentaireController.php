<?php

namespace App\Http\Controllers\ConfigurationController\PaysController;

use App\Http\Controllers\Controller;
use App\Models\Pays;
use App\Models\Utilisateurs;
use App\Models\Commentaires;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Illuminate\Support\Facades\Crypt;

class PageCommentaireController extends Controller
{
    //
    public function index(Request $request): RedirectResponse|View
    {
        
        // Récupérer les informations de l'utilisateur connecter envoyées par le middleware
        $UtilisateurConnecter = $request->attributes->get('authenticated_utilisateur');

        // Récupérer les informations du membre envoyées par le middleware
        $PaysPris = $request->attributes->get('IdPaysSuccess');
        
        // Récupérer les informations du membre envoyées par le middleware
        $InterfacePaysRecuperer = $request->attributes->get('InterfacePays');

        // Récupérer la liste des commentaires
        $CommentairesListe = Commentaires::join('elements', 'elements.id_element', '=', 'commentaires.element_id')
                                            ->where('commentaires.pays_id', $PaysPris->id_pays)
                                            ->orderBy('commentaires.created_at', 'desc')
                                            ->paginate(9);
        
                                        
        // Compter le nombre de commentaire récupérés
        $nombreCommentairesListe = is_countable($CommentairesListe) ? count($CommentairesListe) : 0;
       
        //Page principale
        $CommentaireOptionExist = true;


        return view('principale.pays.commentairePays', compact('UtilisateurConnecter', 'CommentaireOptionExist', 'PaysPris', 'InterfacePaysRecuperer', 'CommentairesListe', 'nombreCommentairesListe'));
   
    }
}
