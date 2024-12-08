<?php

namespace App\Http\Controllers\OfficielController\AgirController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PageMembresController extends Controller
{
    //
    public function index(): RedirectResponse|View
    {

        return view('officiel.principale.agir.membres');
    }
}
