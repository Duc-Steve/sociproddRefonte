<?php

namespace App\Http\Controllers\PaysController;

use App\Http\Controllers\Controller;
use App\Models\Commentaires;
use App\Models\Coordonnees;
use App\Models\Elements;
use App\Models\Pays;
use App\Models\ProfilesMembreBureauExecutifs;
use App\Models\Projets;
use App\Models\Reportages;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Crypt;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class PageAcceuilController extends Controller
{
    /**
     * Affiche la page d'accueil avec les données du middleware.
     *
     * @param Request $request
     * @param string $PaysUrl
     * @return RedirectResponse|View
     */
    public function index(Request $request, $PaysUrl)
    {
        // Récupérer les informations du pays envoyées par le middleware
        $PaysDonnee = $request->attributes->get('paysRecupererVerification');
        
        // Récupérer les informations des fonctionnalités du pays envoyées par le middleware
        $FonctionaliteAcces = $request->attributes->get('fonctionnaliteAcces');
    
        // Récupérer les informations en rapport avec les coordonnées du pays 
        $coordonneePays = Coordonnees::where('pays_id', $PaysDonnee->id_pays)->first();
            
        // Récupérer les informations de l'entête du pays envoyées par le middleware
        $PaysEntete = $request->attributes->get('enteteDonnees');

        // Récupérer la liste des pays actifs
        $listePaysActifs = Pays::where('statut_pays', 'actif')
                               ->orderBy('created_at', 'desc')
                               ->get();

        if(Crypt::decrypt($FonctionaliteAcces->projet) == "true") {

            // Vérifier si lE PAYS a accès aux projets
            // Récupérer le projet en cours enregistré le plus récemment
            $projetEnCours = Elements::join('projets', 'projets.element_id', '=', 'elements.id_element')
                                    ->where('elements.pays_id', $PaysDonnee->id_pays)
                                    ->where('elements.type_element', "projet")
                                    ->where('projets.statut_projet', "en cours")
                                    ->orderBy('elements.created_at', 'desc')
                                    ->first();
        
            // Si un projet en cours est trouvé, définir $nombreProjetEnCours à 1, sinon à 0
            $nombreProjetEnCours = $projetEnCours ? 1 : 0;
        
            // Récupérer le nombre de commentaires associés au projet en cours
            $NombreCommentaire = $projetEnCours ? Commentaires::where('element_id', $projetEnCours->id_element)->count() : 0;
        
        } else {
            // Si lE PAYS n'a pas accès aux projets, définir les variables à des valeurs par défaut
            $projetEnCours = null;
            $NombreCommentaire = 0;
            $nombreProjetEnCours = 0;
        }
        
        if(Crypt::decrypt($FonctionaliteAcces->actualite) == "true") {
        
            // Vérifier si lE PAYS a accès aux actualités
            // Récupérer les 5 dernières actualités enregistrées
            $cinqDerniereActualite = Elements::leftJoin('commentaires', 'commentaires.element_id', '=', 'elements.id_element')
                                                ->select('elements.*', DB::raw('COUNT(commentaires.id_commentaire) as nombre_commentaire'))
                                                ->where('elements.pays_id', $PaysDonnee->id_pays)
                                                ->where('elements.type_element', "actualite")
                                                ->where('elements.statut_element', "publier")
                                                ->groupBy(
                                                    'elements.id_element', 
                                                    'elements.reference_unique', 
                                                    'elements.titre', 
                                                    'elements.petite_description', 
                                                    'elements.nom_photos', 
                                                    'elements.lien_photos', 
                                                    'elements.lien_video', 
                                                    'elements.type_element', 
                                                    'elements.pays_id', 
                                                    'elements.utilisateur_id', 
                                                    'elements.validateur_id', 
                                                    'elements.statut_element', 
                                                    'elements.created_at', 
                                                    'elements.updated_at'
                                                )
                                                ->orderBy('elements.created_at', 'desc')
                                                ->limit(5)
                                                ->get();


                                            
            // Compter le nombre d'actualités récupérées
            $nombreCinqDerniereActualite = is_countable($cinqDerniereActualite) ? count($cinqDerniereActualite) : 0;
        
        } else {
            // Si lE PAYS n'a pas accès aux actualités, définir les variables à des valeurs par défaut
            $cinqDerniereActualite = null;
            $nombreCinqDerniereActualite = 0;
        }
        
        if (Crypt::decrypt($FonctionaliteAcces->podcast) == "true") {
        
            // Vérifier si lE PAYS a accès aux podcasts
            // Récupérer le nombre total de podcasts disponibles
            $NombrePodcast = Elements::where('pays_id', $PaysDonnee->id_pays)
                                    ->where('type_element', "podcast")
                                    ->where('statut_element', "publier")
                                    ->count();
        
            if ($NombrePodcast > 3) {
                // Si plus de 3 podcasts sont disponibles, récupérer les 3 avant-derniers podcasts (en excluant le plus récent)
                $troisAvantDernierPodcast = Elements::where('pays_id', $PaysDonnee->id_pays)
                                                    ->where('type_element', "podcast")
                                                    ->where('statut_element', "publier")
                                                    ->orderBy('created_at', 'desc')
                                                    ->skip(1) // Ignorer le dernier podcast enregistré
                                                    ->limit(3)
                                                    ->get();
                                                    
                // Récupérer le dernier podcast enregistré
                $dernierPodcast = Elements::where('pays_id', $PaysDonnee->id_pays)
                                        ->where('type_element', "podcast")
                                        ->where('statut_element', "publier")
                                        ->orderBy('created_at', 'desc')
                                        ->first();
        
            } else {
                // Si 3 podcasts ou moins sont disponibles, définir $troisAvantDernierPodcast à null
                $troisAvantDernierPodcast = null;
                
                // Récupérer le dernier podcast enregistré
                $dernierPodcast = Elements::where('pays_id', $PaysDonnee->id_pays)
                        ->where('type_element', "podcast")
                        ->where('statut_element', "publier")
                        ->orderBy('created_at', 'desc')
                        ->first();
            }
        
        } else {
            // Si lE PAYS n'a pas accès aux podcasts, définir les variables à des valeurs par défaut
            $troisAvantDernierPodcast = null;
            $dernierPodcast = null;
            $NombrePodcast = 0;
        }
        
        if (Crypt::decrypt($FonctionaliteAcces->reportage) == "true") {
        
            // Vérifier si lE PAYS a accès aux reportages
            // Récupérer les 3 derniers reportages enregistrés
            $troisDernierReportage = Elements::where('pays_id', $PaysDonnee->id_pays)
                                                ->where('type_element', "reportage")
                                                ->where('statut_element', "publier")
                                                ->orderBy('created_at', 'desc')
                                                ->limit(3)
                                                ->get();
        
            // Compter le nombre de reportages récupérés
            $nombreTroisDernierReportage = is_countable($troisDernierReportage) ? count($troisDernierReportage) : 0;
            
        } else {
            // Si lE PAYS n'a pas accès aux reportages, définir les variables à des valeurs par défaut
            $troisDernierReportage = null;
            $nombreTroisDernierReportage = 0;
        }

        if (Crypt::decrypt($FonctionaliteAcces->membre_executif) == "true") {
        
            // Vérifier si lE PAYS a accès aux membre_executif
            // Récupérer les membres enregistrés
            $sousMembrePays = ProfilesMembreBureauExecutifs::where('pays_id', $PaysDonnee->id_pays)
                                                //->where('statut_profile_membre_bureau_executif', "publier")
                                                ->get();
        
            // Compter le nombre de membre récupérés
            $nombreSousMembrePays = is_countable($sousMembrePays) ? count($sousMembrePays) : 0;
            
        } else {
            // Si lE PAYS n'a pas accès aux reportages, définir les variables à des valeurs par défaut
            $sousMembrePays = null;
            $nombreSousMembrePays = 0;
        }
        

        return view('interface.site', compact('PaysDonnee', 'FonctionaliteAcces', 'coordonneePays', 'listePaysActifs', 'PaysEntete', 'NombreCommentaire',
                                                'projetEnCours', 'cinqDerniereActualite', 'troisAvantDernierPodcast', 'dernierPodcast', 'troisDernierReportage',
                                                'nombreProjetEnCours', 'nombreCinqDerniereActualite', 'NombrePodcast', 'nombreTroisDernierReportage', 'sousMembrePays', 'nombreSousMembrePays'));
    }
}
