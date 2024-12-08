<?php

namespace App\Http\Controllers\ConfigurationController\BasiqueController;


use App\Http\Controllers\Controller;
use App\Models\Utilisateurs;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Illuminate\Support\Facades\Crypt;

class PageInscriptionController extends Controller
{
    //
    public function index(): RedirectResponse|View
    {
        // Récupérer le nombre de comptes utilisateurs existants
        $nombreComptes = Utilisateurs::count();

        if ($nombreComptes > 0) {
            // Si le nombre de comptes est supérieur à zéro, rediriger vers la page de connexion
            return redirect()->route('connexion');
        } else {
            // Si aucun compte n'existe, afficher la vue d'inscription
            return view('basique.inscription');
        }

        
    }
}
