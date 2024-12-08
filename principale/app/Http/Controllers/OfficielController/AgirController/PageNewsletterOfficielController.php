<?php

namespace App\Http\Controllers\OfficielController\AgirController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PageNewsletterOfficielController extends Controller
{
    //
    public function index(): RedirectResponse|View
    {
        $newsletterDiv = true;

        return view('officiel.principale.agir.newsletter', compact('newsletterDiv'));
    }

}
