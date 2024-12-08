<?php

namespace App\Http\Controllers\ConfigurationController\BasiqueController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;

class DeconnexionConfigurationController extends Controller
{
    // 
    public function index(Request $request): RedirectResponse|View
    {   

        // Déconnexion de l'utilisateur connecté
        Auth::guard('utilisateur')->logout();

        // Invalidations de la session et régénération du jeton CSRF
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        

        // Redirection après la déconnexion
        return redirect()->route('connexion');
    }
}
