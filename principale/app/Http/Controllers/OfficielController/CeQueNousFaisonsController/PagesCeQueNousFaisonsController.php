<?php

namespace App\Http\Controllers\OfficielController\CeQueNousFaisonsController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PagesCeQueNousFaisonsController extends Controller
{
    //
    public function index(): RedirectResponse|View
    {

        $ceQueNousFaisons = true;
            
        return view('officiel.principale.faisons.acceuil', compact('ceQueNousFaisons'));

    }
}
