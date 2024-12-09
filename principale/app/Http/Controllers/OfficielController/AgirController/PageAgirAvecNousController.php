<?php

namespace App\Http\Controllers\OfficielController\AgirController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PageAgirAvecNousController extends Controller
{
    //
    public function index(): RedirectResponse|View
    {
        $activeAgirAvecNous = true;

        return view('officiel.principale.agir.acceuil', compact('activeAgirAvecNous'));
    }
}
