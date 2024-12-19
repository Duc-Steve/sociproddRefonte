<?php

namespace App\Http\Controllers\OfficielController\CeQueNousFaisonsController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PagesDroitsLiberteVulnerableController extends Controller
{
    //
    public function index(): RedirectResponse|View
    {
        $droitslibertevulnerable = true;
        
        return view('officiel.principale.faisons.droitslibertevulnerable', compact('droitslibertevulnerable'));
    }
}
