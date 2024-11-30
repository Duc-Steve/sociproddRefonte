<?php

namespace App\Http\Controllers\PrincipaleController\DecouvrirController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PageOrganisationController extends Controller
{
    //

    public function index(): RedirectResponse|View
    {
        return view('principale.decouvrir.organisation');
    }
}
