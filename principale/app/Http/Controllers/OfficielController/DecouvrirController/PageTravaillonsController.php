<?php

namespace App\Http\Controllers\OfficielController\DecouvrirController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PageTravaillonsController extends Controller
{
    //

    public function index(): RedirectResponse|View
    {
        return view('officiel.principale.decouvrir.travaillons');
    }
}
