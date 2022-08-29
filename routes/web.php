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
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


Route::get('/consultas', 'ClinicaController@consultas');
Route::get('/consultas_domicilio', 'ClinicaController@consultas_domicilio');
Route::get('/jornadas', 'ClinicaController@jornadas');
Route::get('/staff', 'ClinicaController@staff');
Route::get('/alianzas', 'ClinicaController@alianzas');
Route::get('/contacto', 'ClinicaController@contacto');


Route::resource('catalogo/especialidad', 'catalogo\EspecialidadController');