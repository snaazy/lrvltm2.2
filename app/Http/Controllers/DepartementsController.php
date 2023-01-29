<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Departement;

class DepartementsController extends Controller
{
    public function index()
    {
        $departements = Departement::all();
        return view('departements', ['departements' => $departements]);
    }
    
}
