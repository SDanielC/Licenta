<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Part;

class PagesController extends Controller
{
    public function home ()
    {
        return view('welcome');
    }

    public function search()
    {
        $q = Input::get ( 'q' );
        $car = User::where('nr_masina','LIKE','%'.$q.'%')->orWhere('nume','LIKE','%'.$q.'%')->get();
        if(count($car) > 0)
            return view('welcome')->withDetails($car)->withQuery ( $q );
        else return view ('welcome')->withMessage('No Details found. Try to search again !');
    }
}

// Route::post('/search',function(){
//     $q = Input::get ( 'q' );
//     $car = User::where('nr_masina','LIKE','%'.$q.'%')->orWhere('nume','LIKE','%'.$q.'%')->get();
//     if(count($car) > 0)
//         return view('welcome')->withDetails($car)->withQuery ( $q );
//     else return view ('welcome')->withMessage('No Details found. Try to search again !');
// });