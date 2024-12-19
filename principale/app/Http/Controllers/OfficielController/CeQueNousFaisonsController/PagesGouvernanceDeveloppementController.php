<?php

namespace App\Http\Controllers\OfficielController\CeQueNousFaisonsController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;


class PagesGouvernanceDeveloppementController extends Controller
{
    //
    public function index(): RedirectResponse|View
    {
        $gouvernancedeveloppement = true;

        return view('officiel.principale.faisons.gouvernancedeveloppement', compact('gouvernancedeveloppement'));
    }
}
