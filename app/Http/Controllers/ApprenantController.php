<?php

    namespace App\Http\Controllers;

use index;
use App\Models\Apprenant;
use Illuminate\Http\Request;

class ApprenantController extends Controller
{
    public function index()
    {
        $apprenants = Apprenant::all();
        return view('apprenants.index', compact('apprenants'));
    }
    public function liste_formation()
    {
        return view('formations.liste_formation');
    }

    // Ajoutez d'autres méthodes selon vos besoins
}


