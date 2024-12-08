<?php

namespace App\Http\Controllers\PaysController;

use App\Http\Controllers\Controller;
use App\Models\Pays;
use Illuminate\Http\Request;

class PageListePaysController extends Controller
{
    //
    public function index()
    {

        // Récupérer la liste des pays actifs
        $listePaysActifs = Pays::where('statut_pays', 'actif')
                               ->orderBy('created_at', 'desc')
                               ->get();

        //Nombre de pays 
        $NombrePaysActifs = count($listePaysActifs);

        return view('interface.listePays', compact('listePaysActifs', 'NombrePaysActifs'));
    }
}
