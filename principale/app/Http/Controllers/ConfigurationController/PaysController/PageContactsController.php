<?php

namespace App\Http\Controllers\ConfigurationController\PaysController;

use App\Http\Controllers\Controller;
use App\Models\Contacts;
use App\Models\Pays;
use App\Models\Utilisateurs;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Illuminate\Support\Facades\Crypt;

class PageContactsController extends Controller
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

       
        //Récupérer la liste des contacts non vue, avec l'utilisateur ayant enregistrer
        $RecupererListecontactsNonVue = Contacts::join('pays', 'pays.id_pays', '=', 'pays_id')
                                        ->select('contacts.*', 'pays.nom_normale')
                                        ->where('contacts.pays_id', $PaysPris->id_pays)
                                        ->where('contacts.vue', 0)
                                        ->orderBy('contacts.created_at', 'desc')
                                        ->get();

        $ListecontactsVue = Contacts::join('pays', 'pays.id_pays', '=', 'pays_id')
                                        ->where('contacts.vue', 1)
                                        ->join('utilisateurs', 'utilisateurs.id_utilisateur', '=', 'contacts.utilisateur_id')
                                        ->select('contacts.*', 'pays.nom_normale', 'utilisateurs.nom_prenom')
                                        ->where('contacts.pays_id', $PaysPris->id_pays)
                                        ->orderBy('contacts.created_at', 'desc')
                                        ->get();
    
                                        
        // Compter le nombre de contact vue récupérés
        $nombreListecontactsVue = is_countable($ListecontactsVue) ? count($ListecontactsVue) : 0;


        //Récuperer le nombre de contacts
        $NombreContacts = contacts::count();

        //Page principale
        $ContactExist = true;


        return view('principale.pays.contactPays', compact('UtilisateurConnecter', 'ContactExist', 'PaysPris', 'InterfacePaysRecuperer', 'RecupererListecontactsNonVue', 'NombreContacts', 'ListecontactsVue', 'nombreListecontactsVue'));
   
    }
}
