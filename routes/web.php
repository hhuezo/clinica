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

Auth::routes(['verify' => true]);
Route::get('/home', 'HomeController@index')->name('home');

Route::post('citas_reserva', 'CitasController@citas_reserva');
Route::get('horarios_get', 'CitasController@horarios_get');
Route::get('horario_get', 'CitasController@horario_get');
Route::get('listado_citas','CitasController@listado_reservas');
Route::get('reservas_citas','CitasController@verListadoReservas');
Route::get('reservas_citas_doctor','CitasController@reservas_citas_doctor');
Route::post('actualizar_citas','CitasController@actualizar');
Route::resource('citas', 'CitasController');

Route::resource('seguridad/user', 'seguridad\UserController');
Route::post('seguridad/user/add_rol', 'seguridad\UserController@add_rol');
Route::post('seguridad/user/delete_rol', 'seguridad\UserController@delete_rol');
Route::get('seguridad/users/agregar','seguridad\UserController@agregar');

Route::resource('seguridad/role', 'seguridad\RoleController');
Route::post('seguridad/roles/add_permisos', 'seguridad\RolePermissionController@add_permiso');
Route::post('seguridad/roles/delete_permisos', 'seguridad\RolePermissionController@delete_permiso');
Route::resource('seguridad/permission', 'seguridad\PermissionController');

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
Route::post('doctor/foto/actualizar','catalogo\DoctorController@actualizar_foto');






