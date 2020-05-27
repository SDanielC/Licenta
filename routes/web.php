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
// Route::get('/Detalii', 'PagesController@AdaugareReparatie');

// Route::get('/Car', 'CarController@create');
Route::resource('Car', 'CarController');
Route::get('/Car', 'CarController@create');
Route::resource('Detalii', 'CarController');
Route::get('/Detalii', 'CarController@index');
// Route::get('/Detalii', 'CarController@show');

// Route::get('/Part', 'PartController@Part');
Route::resource('Part', 'PartController');
// Route::get('/Edit', 'PartController@Edit');

Route::post('submitpiese', 'PartController@store');
Route::post('submitclient', 'CarController@store');

Route::post('sendEmail', 'CarController@send');

// Route::post('/search', 'PagesController@search');

// Route::get('editeaza', 'PartController@editeaza');
// Route::get('/Part/{$id}/edit', 'PartsController@edit');
// Route::get('stergepiese/{$id}', 'PartController@destroy');
