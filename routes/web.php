<?php

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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('banco', 'BancoController');
Route::resource('barrio', 'BarriosController');
Route::resource('persona', 'PersonaController');
Route::resource('selecion', 'SeleccionadoController');
Route::resource('tipoC', 'TipoCuentaController');





Route::post('selecion', 'SeleccionadoController@store')->name('selecion.store');
Route::get('persona', 'PersonaController@index')->name('persona.index');

