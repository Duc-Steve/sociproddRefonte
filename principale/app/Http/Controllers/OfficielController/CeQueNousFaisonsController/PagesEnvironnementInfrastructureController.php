<?php

namespace App\Http\Controllers\OfficielController\CeQueNousFaisonsController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PagesEnvironnementInfrastructureController extends Controller
{
    //
    public function index(): RedirectResponse|View
    {
        $environnementinfrastructure = true;

        return view('officiel.principale.faisons.environnementinfrastructure', compact('environnementinfrastructure'));
    }
}
