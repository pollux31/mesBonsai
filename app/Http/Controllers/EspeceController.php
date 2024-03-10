<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Espece;

class EspeceController extends Controller
{
    // Lister toutes les espèces
    public function index()
    {
        // lister toutes les especes
        $especes = Espece::all();
        return view('especes.index', compact('especes'));
    }
}
