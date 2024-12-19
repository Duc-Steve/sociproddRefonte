<?php

namespace App\Http\Controllers\OfficielController\CeQueNousFaisonsController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PagesInclusionsAutomatisationController extends Controller
{
    //
    public function index(): RedirectResponse|View
    {
        $inclusionsautomatisation = true;

        return view('officiel.principale.faisons.inclusionsautomatisation', compact('inclusionsautomatisation'));
    }
}
