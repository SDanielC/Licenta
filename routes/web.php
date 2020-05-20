<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\Console\Input;
use App\Car;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PagesController@home');
Route::get('/CreareProgramare', 'PagesController@CreareProgramare');
Route::get('/DetaliiReparatie', 'PagesController@DetaliiReparatie');


Route::get('/Part', 'PartsController@index');
Route::resource('Part', 'PartController');
Route::get('/Car', 'CarsController@index');
Route::resource('Car', 'CarController');

Route::post('submitpiese', 'PartController@store');
Route::post('submitclient', 'CarController@store');

Route::post('/search',function(){
    $q = Input::get ( 'q' );
    $car = User::where('nr_masina','LIKE','%'.$q.'%')->orWhere('nume','LIKE','%'.$q.'%')->get();
    if(count($car) > 0)
        return view('welcome')->withDetails($car)->withQuery ( $q );
    else return view ('welcome')->withMessage('No Details found. Try to search again !');
});

// Route::get('editeaza', 'PartController@editeaza');
// Route::get('/Part/{$id}/edit', 'PartsController@edit');
// Route::get('stergepiese/{$id}', 'PartController@destroy');
