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

Route::post('citas_reserva', 'CitasController@citas_reserva');
Route::get('horarios_get', 'CitasController@horarios_get');
Route::resource('citas', 'CitasController');


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
Route::post('catalogo/horario', 'catalogo\HorarioController@addCentro');

Route::post('catalogo/doctor/agregar_horario', 'catalogo\DoctorController@agregar_horario');
Route::post('catalogo/doctor/eliminar_horario', 'catalogo\DoctorController@eliminar_horario');
Route::post('catalogo/doctor/agregar_perfil', 'catalogo\DoctorController@agregar_perfil');
Route::post('catalogo/doctor/eliminar_perfil', 'catalogo\DoctorController@eliminar_perfil');






