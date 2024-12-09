<?php

namespace App\Http\Controllers\OfficielController\DecouvrirController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PageDecouvrirSOCIPRODDController extends Controller
{
    //

    public function index(): RedirectResponse|View
    {
        $activeDecouvrirSociprodd = true;

        return view('officiel.principale.decouvrir.acceuil', compact('activeDecouvrirSociprodd'));
    }
}
