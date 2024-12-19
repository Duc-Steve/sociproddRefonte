<?php

namespace App\Http\Controllers\OfficielController\CeQueNousFaisonsController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PagesEducationJuridiqueController extends Controller
{
    //
    public function index(): RedirectResponse|View
    {
        $educationjuridique = true;
        
        return view('officiel.principale.faisons.educationjuridique', compact('educationjuridique'));
    }
}
