<?php

namespace App\Http\Controllers\PaysController;

use App\Http\Controllers\Controller;
use App\Models\Pays;
use Illuminate\Http\Request;

class PageDonController extends Controller
{
    //
    public function index()
    {


        return view('interface.don');
    }
}
