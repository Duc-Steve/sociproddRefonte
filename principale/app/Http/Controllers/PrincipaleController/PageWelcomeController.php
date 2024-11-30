<?php

namespace App\Http\Controllers\PrincipaleController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PageWelcomeController extends Controller
{
    //

    public function index(): RedirectResponse|View
    {
        return view('welcome');
    }
}
