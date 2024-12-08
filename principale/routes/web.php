<?php

use App\Http\Controllers\OfficielController\AgirController\PageAgirAvecNousController;
use App\Http\Controllers\OfficielController\AgirController\PageMembresController;
use App\Http\Controllers\OfficielController\AgirController\PageNewsletterController;
use App\Http\Controllers\OfficielController\AgirController\PageProjetsController;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\OfficielController\PageWelcomeController;
use App\Http\Controllers\OfficielController\DecouvrirController\PageBilanController;
use App\Http\Controllers\OfficielController\DecouvrirController\PageContactController;
use App\Http\Controllers\OfficielController\DecouvrirController\PageDecouvrirSOCIPRODDController;
use App\Http\Controllers\OfficielController\DecouvrirController\PageLocalisationController;
use App\Http\Controllers\OfficielController\DecouvrirController\PageOrganisationController;
use App\Http\Controllers\OfficielController\DecouvrirController\PageStructureController;
use App\Http\Controllers\OfficielController\DecouvrirController\PageTravaillonsController;












// Route pour le site sociprodd.org
// Accessible aux visiteurs
// Exemple : https://sociprodd.org/

Route::domain('sociprodd.local')->group(function () {

    //Welcome
    Route::get('/', [PageWelcomeController::class, 'index'])->name('welcome');

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
        Route::get('/newsletter', [PageNewsletterController::class, 'index'])->name('newsletter');
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


});




// Route pour le site configuration.sociprodd.org
// Accessible aux administrateurs internes
// Exemple : https://configuration.sociprodd.org/

Route::domain('configuration.sociprodd.local')->group(function () {


});





// Route pour le site recrutements.sociprodd.org
// Accessible aux visiteurs
// Exemple : https://recrutements.sociprodd.org/

Route::domain('recrutements.sociprodd.local')->group(function () {


});

