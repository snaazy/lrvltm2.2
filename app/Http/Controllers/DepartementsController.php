<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Departement;

class DepartementsController extends Controller
{
    public function index()
    {
        $departements = DB::table('departements')->get();
        return view('departements',['departements' => $departements]);
    }
    
}
