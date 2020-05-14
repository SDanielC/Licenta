<?php

use Illuminate\Support\Facades\Route;

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

Route::post('submitpiese', 'PartController@store');

// Route::get('editeaza', 'PartController@editeaza');
// Route::get('/Part/{$id}/edit', 'PartsController@edit');
// Route::get('stergepiese/{$id}', 'PartController@destroy');
