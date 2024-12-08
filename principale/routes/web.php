<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\OfficielController\PageWelcomeController;
use App\Http\Controllers\OfficielController\DecouvrirController\PageBilanController;
use App\Http\Controllers\OfficielController\DecouvrirController\PageContactController;
use App\Http\Controllers\OfficielController\DecouvrirController\PageDecouvrirSOCIPRODDController;
use App\Http\Controllers\OfficielController\DecouvrirController\PageLocalisationController;
use App\Http\Controllers\OfficielController\DecouvrirController\PageOrganisationController;
use App\Http\Controllers\OfficielController\DecouvrirController\PageStructureController;
use App\Http\Controllers\OfficielController\DecouvrirController\PageTravaillonsController;
use App\Http\Controllers\OfficielController\AgirController\PageAgirAvecNousController;
use App\Http\Controllers\OfficielController\AgirController\PageMembresController;
use App\Http\Controllers\OfficielController\AgirController\PageProjetsController;






use App\Http\Controllers\PaysController\PageAcceuilController;
use App\Http\Controllers\PaysController\PageDonController;
use App\Http\Controllers\PaysController\PageListePaysController;
use App\Http\Controllers\PaysController\PageSuccesController;
use App\Http\Controllers\PaysController\PagePaysProjetsController;
use App\Http\Controllers\PaysController\PagePaysReportagesController;
use App\Http\Controllers\PaysController\PagePaysActualitesController;
use App\Http\Controllers\PaysController\PagePaysPodcastsController;
use App\Http\Controllers\PaysController\InformationElementController;






use App\Http\Middleware\PaysMiddleware\AccesInterfacePaysUrlMidd;
use App\Http\Middleware\PaysMiddleware\SiteIdElementMidd;
use App\Http\Middleware\ConfigurationMiddleware\AuthentificationVerificationMidd;
use App\Http\Middleware\ConfigurationMiddleware\ExistanceIdPaysMidd;
use App\Http\Middleware\ConfigurationMiddleware\IdentiteUtilisateurMidd;
use App\Http\Middleware\ConfigurationMiddleware\ExistanceIdActualiteMidd;
use App\Http\Middleware\ConfigurationMiddleware\ExistanceIdContactMidd;
use App\Http\Middleware\ConfigurationMiddleware\ExistanceIdElementMidd;
use App\Http\Middleware\ConfigurationMiddleware\ExistanceIdPodcastMidd;
use App\Http\Middleware\ConfigurationMiddleware\ExistanceIdReportageMidd;
use App\Http\Middleware\ConfigurationMiddleware\MessageTelechargementMidd;
use App\Http\Middleware\ConfigurationMiddleware\ExistanceEmailPasswordMidd;
use App\Http\Middleware\ConfigurationMiddleware\ExistanceDonneeGestionProfileMidd;
use App\Http\Middleware\ConfigurationMiddleware\ExistanceIdUtilisateurMidd;






use App\Http\Controllers\ConfigurationController\BasiqueController\PageConnexionController;
use App\Http\Controllers\ConfigurationController\BasiqueController\PageInscriptionController;
use App\Http\Controllers\ConfigurationController\BasiqueController\CreationCompteConfigurationController;
use App\Http\Controllers\ConfigurationController\BasiqueController\DeconnexionConfigurationController;
use App\Http\Controllers\ConfigurationController\BasiqueController\GenererSessionConnexionController;
use App\Http\Controllers\ConfigurationController\BasiqueController\TentativeConnexionController;
use App\Http\Controllers\ConfigurationController\BasiqueController\PageChangeMotDePasseController;
use App\Http\Controllers\ConfigurationController\BasiqueController\SoumettreChangementMotDePasseController;
use App\Http\Controllers\ConfigurationController\BasiqueController\PageNouveauMotDePasseController;
use App\Http\Controllers\ConfigurationController\BasiqueController\EnregistrerNouveauMotPasseController;
use App\Http\Controllers\ConfigurationController\BasiqueController\ConfirmationUtilisateurController;
use App\Http\Controllers\ConfigurationController\PageSuivieActivtesController;
use App\Http\Controllers\ConfigurationController\PageSuivieConnexionController;
use App\Http\Controllers\ConfigurationController\PageTableauBordController;
use App\Http\Controllers\ConfigurationController\GestionController\PageGestionProfileSBEController;
use App\Http\Controllers\ConfigurationController\GestionController\MiseJourProfileSBEController;
use App\Http\Controllers\ConfigurationController\PaysController\ChangerStatutPaysController;
use App\Http\Controllers\ConfigurationController\PaysController\ChangeStatutElementPaysController;
use App\Http\Controllers\ConfigurationController\PaysController\EditActualitePaysController;
use App\Http\Controllers\ConfigurationController\PaysController\EditPodcastPaysController;
use App\Http\Controllers\ConfigurationController\PaysController\EditProjetPaysController;
use App\Http\Controllers\ConfigurationController\PaysController\EditReportagePaysController;
use App\Http\Controllers\ConfigurationController\PaysController\EnregistrerNouveauCoordonneeController;
use App\Http\Controllers\ConfigurationController\PaysController\EnregistrerNouveauPaysController;
use App\Http\Controllers\ConfigurationController\PaysController\MemoriserNouveauElementsPaysController;
use App\Http\Controllers\ConfigurationController\PaysController\MemoriserSousMembreExecutifPaysController;
use App\Http\Controllers\ConfigurationController\PaysController\MiseJourCoordonneePaysController;
use App\Http\Controllers\ConfigurationController\PaysController\MiseJourInterfacePaysController;
use App\Http\Controllers\ConfigurationController\PaysController\PageCommentaireController;
use App\Http\Controllers\ConfigurationController\PaysController\ChangeStatutCommentaireController;
use App\Http\Controllers\ConfigurationController\PaysController\PageContactsController;
use App\Http\Controllers\ConfigurationController\PaysController\ReponseContactController;
use App\Http\Controllers\ConfigurationController\PaysController\PageCoordonneeController;
use App\Http\Controllers\ConfigurationController\PaysController\PageDetailContactController;
use App\Http\Controllers\ConfigurationController\PaysController\PageDetailElementsAutrePaysController;
use App\Http\Controllers\ConfigurationController\PaysController\PageElementsPaysController;
use App\Http\Controllers\ConfigurationController\PaysController\PageInterfacePaysController;
use App\Http\Controllers\ConfigurationController\PaysController\PageNewsletterController;
use App\Http\Controllers\ConfigurationController\PaysController\PublierCommuniquerController;
use App\Http\Controllers\ConfigurationController\PaysController\PageNouveauCoordonneeController;
use App\Http\Controllers\ConfigurationController\PaysController\PageNouveauElementsPaysController;
use App\Http\Controllers\ConfigurationController\PaysController\PageNouveauPaysController;
use App\Http\Controllers\ConfigurationController\PaysController\PageNouveauSousMembreExecutifPaysController;
use App\Http\Controllers\ConfigurationController\PaysController\PageOptionPaysController;
use App\Http\Controllers\ConfigurationController\PaysController\PagePaysController;
use App\Http\Controllers\ConfigurationController\PaysController\PageSousMembresExecutifController;
use App\Http\Controllers\ConfigurationController\PaysController\SauvegarderNouveauActualitePaysController;
use App\Http\Controllers\ConfigurationController\PaysController\SauvegarderNouveauPodcastPaysController;
use App\Http\Controllers\ConfigurationController\PaysController\SauvegarderNouveauReportagePaysController;
use App\Http\Controllers\ConfigurationController\UtilisateursController\PageNouveauUtilisateurController;
use App\Http\Controllers\ConfigurationController\UtilisateursController\PageUtilisateurController;
use App\Http\Controllers\ConfigurationController\UtilisateursController\SauvegarderNouveauUtilisateurController;
use App\Http\Controllers\ConfigurationController\UtilisateursController\PageMonCompteController;
use App\Http\Controllers\ConfigurationController\UtilisateursController\MiseJourMonCompteController;
use App\Http\Controllers\ConfigurationController\UtilisateursController\PageDetailUtilisateurController;
use App\Http\Controllers\ConfigurationController\UtilisateursController\ModifierDonneeUtilisateurController;
use App\Http\Controllers\ConfigurationController\UtilisateursController\ChangerStatutUtilisateurController;
use App\Http\Controllers\OfficielController\AgirController\PageNewsletterOfficielController;







// Route pour le site sociprodd.org
// Accessible aux visiteurs
// Exemple : https://sociprodd.org/
Route::domain('sociprodd.local')->group(function () {

    //Welcome
    Route::get('/', [PageWelcomeController::class, 'index'])->name('welcome');

    
    // Agir avec nous
    Route::prefix('/ce-que-nous-faisons')->name('agir-avec-nous.')->group(function () {

    });



    // Découvrir la SOCIPRODD
    Route::prefix('/decouvrir-sociprodd')->name('decouvrir-sociprodd.')->group(function () {

        //Principale
        Route::get('/', [PageDecouvrirSOCIPRODDController::class, 'index'])->name('acceuil');
        //Contactez-nous
        Route::get('/contacts', [PageContactController::class, 'index'])->name('contacts');
        //Bilan de l'année précédent
        Route::get('/bilan', [PageBilanController::class, 'index'])->name('bilan');
        //Organisation 
        Route::get('/organisation', [PageOrganisationController::class, 'index'])->name('organisation');
        //Structure
        Route::get('/structure', [PageStructureController::class, 'index'])->name('structure');
        //Travailler
        Route::get('/travaillons', [PageTravaillonsController::class, 'index'])->name('travaillons');
        //Localisation
        Route::get('/localisation', [PageLocalisationController::class, 'index'])->name('localisation');
        
    });

    
    // Agir avec nous
    Route::prefix('/agir-avec-nous')->name('agir-avec-nous.')->group(function () {

        //Principale
        Route::get('/', [PageAgirAvecNousController::class, 'index'])->name('acceuil');
        //Newsletter
        Route::get('/newsletter', [PageNewsletterOfficielController::class, 'index'])->name('newsletter');
        //Membres
        Route::get('/devenir-membre', [PageMembresController::class, 'index'])->name('devenir-membre');
        //Projets
        Route::get('/projets', [PageProjetsController::class, 'index'])->name('projets');

    });
    
});




// Route pour le site pays.sociprodd.org
// Accessible aux visiteurs
// Exemple : https://pays.sociprodd.org/
Route::domain('pays.sociprodd.local')->group(function () {

    
    Route::get('/', [PageListePaysController::class, 'index']);

    Route::prefix('/{PaysUrl}')->middleware(AccesInterfacePaysUrlMidd::class)->group(function () {

        Route::get('/', [PageAcceuilController::class, 'index'])->name('acceuil');
        
       
        Route::get('/succes', [PageSuccesController::class, 'index'])->name('succesRequette');
        
        Route::get('/projets', [PagePaysProjetsController::class, 'index'])->name('pays-projets');
        
        Route::get('/reportages', [PagePaysReportagesController::class, 'index'])->name('pays-reportages');
        
        Route::get('/actualites', [PagePaysActualitesController::class, 'index'])->name('pays-actualites');
        
        Route::get('/podcasts', [PagePaysPodcastsController::class, 'index'])->name('pays-podcasts');


        // Préfixe toutes les routes avec l'identifiant du reportage
        Route::prefix('/{IdElementSite}')->middleware(SiteIdElementMidd::class)->group(function () {
            
            Route::get('/information', [InformationElementController::class, 'index'])->name('information');
            

        });

    });

});




// Route pour le site configuration-pays.sociprodd.org
// Accessible aux administrateurs internes
// Exemple : https://configuration-pays.sociprodd.org/
Route::domain('configuration-pays.sociprodd.local')->group(function () {

    
    Route::get('/connexion', [PageConnexionController::class, 'index'])->name('connexion');
    
    Route::post('/connexion', [GenererSessionConnexionController::class, 'session'])->name('connexion.session');
    
    Route::get('/inscription', [PageInscriptionController::class, 'index'])->name('inscription');
    
    Route::post('/inscription', [CreationCompteConfigurationController::class, 'create'])->name('inscription.creation');
    
    Route::get('/deconnexion', [DeconnexionConfigurationController::class, 'index'])->name('deconnexion');
    
    Route::get('/change-mot-passe', [PageChangeMotDePasseController::class, 'index'])->name('change-mot-passe');
    
    Route::post('/change-mot-passe', [SoumettreChangementMotDePasseController::class, 'create'])->name('change-mot-passe.token');
    
    
    Route::middleware(ExistanceEmailPasswordMidd::class)->group(function () {
        
        Route::get('/nouveau-mot-passe/{TokenSecurite}', [PageNouveauMotDePasseController::class, 'index'])->name('nouveau-mot-passe');
        
        Route::post('/nouveau-mot-passe/{TokenSecurite}', [EnregistrerNouveauMotPasseController::class, 'update'])->name('nouveau-mot-passe.enregistrer');
        
    });
    
    Route::middleware(ExistanceDonneeGestionProfileMidd::class)->group(function () {
        
        Route::get('/gestion-profile/{Email}/{TokenGestion}', [PageGestionProfileSBEController::class, 'index'])->name('gestion-profile');
        
        Route::post('/gestion-profile/{Email}/{TokenGestion}', [MiseJourProfileSBEController::class, 'update'])->name('gestion-profile.enregistrer');
        
    });


    Route::get('/confirmation/{Email}', [ConfirmationUtilisateurController::class, 'confirmation'])->name('confirmation');
    
    Route::get('/tentative-connexion/{IdReseaux}/{TokenSecurite}/{securite}', [TentativeConnexionController::class, 'tentative'])->name('tentative-connexion');

    
    Route::middleware(AuthentificationVerificationMidd::class)->group(function () {

        Route::get('/telechargement/{Telechargerfichier}')->middleware(MessageTelechargementMidd::class)->name('Telechargement');
       
        // Partie accessible uniquement au comité directeur et administrateur avec vérification du middleware pour l'identité de l'utilisateur
        Route::middleware(IdentiteUtilisateurMidd::class)->group(function () {

            // Route vers le tableau de bord
            Route::get('/', [PageTableauBordController::class, 'index'])->name('tableau-bord');
            
            // Préfixe toutes les routes liées aux pays
            Route::prefix('/pays')->name('pays.')->group(function () {

                // Route pour afficher la liste des pays
                Route::get('/', [PagePaysController::class, 'index'])->name('nos-pays');

                // Route pour afficher le formulaire de création d'un nouveau pays
                Route::get('/nouveau-pays', [PageNouveauPaysController::class, 'index'])->name('nouveau-pays');
                
                // Route pour enregistrer un nouveau pays
                Route::post('/nouveau-pays', [EnregistrerNouveauPaysController::class, 'create'])->name('nouveau-pays.enregistrer');  
                
                // Groupe de routes pour gérer les pays existants, protégé par le middleware pour vérifier l'existence de IdPays
                Route::middleware(ExistanceIdPaysMidd::class)->group(function () {

                    // Route pour changer le statut d'un pays
                    Route::get('/change-statut-pays/{IdPays}', [ChangerStatutPaysController::class, 'update'])->name('change-statut-pays');
                });
            });

            // Préfixe toutes les routes liées aux utilisateurs
            Route::prefix('/utilisateur')->name('utilisateur.')->group(function () {

                // Route pour afficher la liste des utilisateurs
                Route::get('/', [PageUtilisateurController::class, 'index'])->name('nos-utilisateurs');
                
                // Route pour afficher les details de mon compte
                Route::get('/mon-compte', [PageMonCompteController::class, 'index'])->name('mon-compte');
                
                // Route pour mettre à jours les details de mon compte
                Route::post('/mon-compte', [MiseJourMonCompteController::class, 'update'])->name('mon-compte.enregistrer');

                // Route pour afficher le formulaire de création d'un nouvel utilisateur
                Route::get('/nouvel-utilisateur', [PageNouveauUtilisateurController::class, 'index'])->name('nouvel-utilisateur');
                
                // Route pour enregistrer un nouvel utilisateur
                Route::post('/nouvel-utilisateur', [SauvegarderNouveauUtilisateurController::class, 'create'])->name('nouvel-utilisateur.enregistrer'); 
                
                // Préfixe toutes les routes avec l'identifiant de l'utilisateur
                Route::prefix('/{IdUtilisateur}')->middleware(ExistanceIdUtilisateurMidd::class)->group(function () {

                    // Route pour afficher les details de l'utilisateur
                    Route::get('/', [PageDetailUtilisateurController::class, 'index'])->name('detail-utilisateur');
                    
                    // Route pour envoyer une modification 
                    Route::post('/modifie', [ModifierDonneeUtilisateurController::class, 'update'])->name('detail-utilisateur.enregistrer');
                    
                    // Route pour changer le statut du compte de l'utilisateur
                    Route::get('/change', [ChangerStatutUtilisateurController::class, 'update'])->name('change-utilisateur');

                });
            });

            // Préfixe toutes les routes liées aux suivies d'activités
            Route::prefix('/suivie-activite')->name('suivie-activite.')->group(function () {

                // Route pour afficher la liste des suivies d'activités
                Route::get('/', [PageSuivieActivtesController::class, 'index'])->name('liste-activite');

            });

            // Route vers le suivie des connexions
            Route::get('/suivie-connexion', [PageSuivieConnexionController::class, 'index'])->name('suivie-connexion');
        });

       
        // Groupe de routes accessibles uniquement aux représentants, avec vérification du middleware pour l'existence de IdPays
        Route::middleware(ExistanceIdPaysMidd::class)->group(function () {
            
            // Préfixe toutes les routes avec l'identifiant du pays
            Route::prefix('/{IdPays}')->group(function () {
                
                // Route vers la page principale du pays
                Route::get('/', [PageOptionPaysController::class, 'index'])->name('bilan-pays');
                
                // Route pour afficher les details de mon compte
                Route::get('/mon-compte', [PageMonCompteController::class, 'index'])->name('mon-compte');
                
                // Route pour mettre à jours les details de mon compte
                Route::post('/mon-compte', [MiseJourMonCompteController::class, 'update'])->name('mon-compte.enregistrer');
                
                // Route vers la page de détails de l'interface
                Route::get('/interface', [PageInterfacePaysController::class, 'index'])->name('detail-interface');
                
                // Route pour mettre à jour les détails de l'interface
                Route::post('/interface', [MiseJourInterfacePaysController::class, 'update'])->name('detail-interface.mise-a-jour');
                
                
                // Route pour gérer les profils des sous-membres exécutifs
                Route::get('/profile-sous-membre-executif', [PageSousMembresExecutifController::class, 'index'])->name('gestion-sous-membres-executif');
                
                // Route pour gérer les nouveau profils des sous-membres exécutifs
                Route::get('/nouveau-profile-executif', [PageNouveauSousMembreExecutifPaysController::class, 'index'])->name('nouveau-profile-executif');

                // Route pour enregistrer les profils des sous-membres exécutifs
                Route::post('/nouveau-profile-executif', [MemoriserSousMembreExecutifPaysController::class, 'create'])->name('nouveau-profile-executif.enregistrer');
                
                // Route pour gérer les éléments du pays
                Route::get('/elements', [PageElementsPaysController::class, 'index'])->name('contenu-elements');
                
                // Route pour gérer les nouveau éléments du pays
                Route::get('/nouveau-element', [PageNouveauElementsPaysController::class, 'index'])->name('nouveau-element');

                // Route pour enregistrer un nouveau élément du pays
                Route::post('/nouveau-element', [MemoriserNouveauElementsPaysController::class, 'create'])->name('nouveau-element.enregistrer');
                
                // Route pour gérer les coordonnées (probablement les détails de contact)
                Route::get('/coordonnees', [PageCoordonneeController::class, 'index'])->name('nos-coordonnees');

                // Route pour mettre à jour les détails de coordonnée
                Route::post('/coordonnees', [MiseJourCoordonneePaysController::class, 'update'])->name('nos-coordonnees.mise-a-jour');
                
                // Route pour gérer les nouvelles coordonnees
                Route::get('/nouveau-coordonnee', [PageNouveauCoordonneeController::class, 'index'])->name('nouveau-coordonnee');

                // Route pour enregistrer un nouveau coordonnée
                Route::post('/nouveau-coordonnee', [EnregistrerNouveauCoordonneeController::class, 'create'])->name('nouveau-coordonnee.enregistrement');

                // Route pour gérer les commentaires
                Route::get('/commentaires', [PageCommentaireController::class, 'index'])->name('gestion-commentaires');
                
                // Route pour changer statut commentaire
                Route::get('/commentaires/{IdCommentaire}', [ChangeStatutCommentaireController::class, 'update'])->name('gestion-commentaires.enregistrer');
                
                // Route pour gérer les newsletters
                Route::get('/newsletters', [PageNewsletterController::class, 'index'])->name('gestion-newsletters');
                
                // Route pour gérer les newsletters
                Route::post('/newsletters', [PublierCommuniquerController::class, 'publier'])->name('gestion-newsletters.publier');
                
                // Route pour gérer les demandes de contact
                Route::get('/contacts', [PageContactsController::class, 'index'])->name('demande-contacts');

                // Préfixe toutes les routes avec l'identifiant du contact
                Route::prefix('/{IdContact}')->middleware(ExistanceIdContactMidd::class)->group(function () {

                    // Route pour afficher les details demandes de contact

                    Route::get('/', [PageDetailContactController::class, 'index'])->name('detail-contact');
                    
                    // Route pour envoyer une réponse demandes de contact
                    Route::post('/contact', [ReponseContactController::class, 'reponse'])->name('detail-contact.reponse');

                });


                Route::middleware(ExistanceIdElementMidd::class)->group(function () {

                    // Préfixe toutes les routes avec l'identifiant de l'éléménts
                    Route::prefix('/{IdElement}')->group(function () {


                        // Route vers la page principale des détails d'élements
                        Route::get('/det', [PageDetailElementsAutrePaysController::class, 'index'])->name('detail-element-autre');
                        
                        // Route vers le changement du statut de l'élements
                        Route::post('/element', [ChangeStatutElementPaysController::class, 'update'])->name('detail-element-autre.change-statut');
                    
                        
                        Route::post('/reportage', [SauvegarderNouveauReportagePaysController::class, 'create'])->name('detail-element-autre.nouveau-reportage');

                        // Préfixe toutes les routes avec l'identifiant du reportage
                        Route::prefix('/{IdReportage}')->middleware(ExistanceIdReportageMidd::class)->group(function () {

                            Route::post('/reportage-update', [EditReportagePaysController::class, 'update'])->name('detail-element-autre.reportage-update');

                        });

                        Route::post('/podcast', [SauvegarderNouveauPodcastPaysController::class, 'create'])->name('detail-element-autre.nouveau-podcast');

                        // Préfixe toutes les routes avec l'identifiant du podcat
                        Route::prefix('/{IdPodcast}')->middleware(ExistanceIdPodcastMidd::class)->group(function () {

                            Route::post('/podcast-update', [EditPodcastPaysController::class, 'update'])->name('detail-element-autre.podcast-update');

                        });

                        
                        Route::post('/actualite', [SauvegarderNouveauActualitePaysController::class, 'create'])->name('detail-element-autre.nouvel-actualite');

                        // Préfixe toutes les routes avec l'identifiant de l'actualite
                        Route::prefix('/{IdActualite}')->middleware(ExistanceIdActualiteMidd::class)->group(function () {

                            Route::post('/actualite-update', [EditActualitePaysController::class, 'update'])->name('detail-element-autre.actualite-update');

                        });
                            
                        Route::post('/projet-update', [EditProjetPaysController::class, 'update'])->name('detail-element-autre.projet-update');

                    });


                });


            });

        });

    });


});





// Route pour le site recrutements.sociprodd.org
// Accessible aux visiteurs
// Exemple : https://recrutements.sociprodd.org/
Route::domain('recrutements.sociprodd.local')->group(function () {


});

