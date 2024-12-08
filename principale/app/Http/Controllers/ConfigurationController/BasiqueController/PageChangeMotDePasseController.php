<?php

namespace App\Http\Controllers\ComitesController\BasiqueController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Illuminate\Support\Facades\Crypt;

class PageChangeMotDePasseController extends Controller
{
    //
    public function index(): RedirectResponse|View
    {

        // Afficher la vue de connexion si l'utilisateur n'est pas authentifié
        return view('basique.changeMotPasse');
    
    }
}
