<?php

namespace App\Http\Controllers\OfficielController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PageActualitesOfficielController extends Controller
{
    //
    public function index(): RedirectResponse|View
    {
        return view('officiel.actualites');
    }
}
