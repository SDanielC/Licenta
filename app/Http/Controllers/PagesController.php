<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\part;

class PagesController extends Controller
{
    public function home ()
    {
        return view('welcome');
    }

    public function CreareProgramare ()
    {
        return view('CreareProgramare');
    }

    public function DetaliiReparatie ()
    {
        return view('DetaliiReparatie');
    }

}
