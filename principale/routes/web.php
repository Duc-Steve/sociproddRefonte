<?php

use App\Http\Controllers\PrincipaleController\DecouvrirController\PageBilanController;
use App\Http\Controllers\PrincipaleController\DecouvrirController\PageContactController;
use App\Http\Controllers\PrincipaleController\DecouvrirController\PageDecouvrirSOCIPRODDController;
use App\Http\Controllers\PrincipaleController\DecouvrirController\PageLocalisationController;
use App\Http\Controllers\PrincipaleController\DecouvrirController\PageOrganisationController;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\PrincipaleController\PageWelcomeController;











// Route pour le site sociprodd.org
// Accessible aux visiteurs
// Exemple : https://sociprodd.org/

Route::domain('sociprodd.local')->group(function () {

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
        //Localisation
        Route::get('/localisation', [PageLocalisationController::class, 'index'])->name('localisation');
    });
});