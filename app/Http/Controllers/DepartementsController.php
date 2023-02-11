<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Departement;

class DepartementsController extends Controller
{
    public function index()
    {
        $departements = Departement::all(); // on récupère tous les départements de la BD
        return view('departements', ['departements' => $departements]); // affichage de la vue des départements avec la liste des départements passée en paramètre
    }
    
}
