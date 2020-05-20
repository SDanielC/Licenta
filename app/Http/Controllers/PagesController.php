<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Part;

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

    public function CreareClient ()
    {
        return view('CreareClient');
    }

    public function DetaliiReparatie ()
    {
        return view('DetaliiReparatie');
    }

}
