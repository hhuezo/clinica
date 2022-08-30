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

Route::resource('citas', 'CitasController');
Route::post('citas_reserva', 'ClinicaController@citas_reserva');

Route::get('/consultas', 'ClinicaController@consultas');
Route::get('/consultas_domicilio', 'ClinicaController@consultas_domicilio');
Route::get('/jornadas', 'ClinicaController@jornadas');
Route::get('/staff', 'ClinicaController@staff');
Route::get('/alianzas', 'ClinicaController@alianzas');
Route::get('/contacto', 'ClinicaController@contacto');
Route::get('/servicios', 'ClinicaController@servicios');
Route::get('/acerca', 'ClinicaController@acerca');
Route::resource('catalogo/especialidad', 'catalogo\EspecialidadController');
Route::resource('catalogo/doctor', 'catalogo\DoctorController');
Route::resource('catalogo/horario', 'catalogo\HorarioController');
