<?php

use App\Role;
use Illuminate\Support\Facades\Route;
use GuzzleHttp\Client;

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
Route::get('get_horario','CitasController@get_horario');
Route::get('get_paciente','CitasController@get_paciente');
Route::get('gets_paciente','CitasController@gets_paciente');
Route::get('horario_get', 'CitasController@horario_get');
Route::get('agregar_paciente','seguridad\UserController@agregar_paciente');
Route::post('guardar_paciente','seguridad\UserController@guardar_paciente');
Route::get('listado_citas','CitasController@listado_reservas');
Route::get('citas/listado_citas_secretaria','CitasController@listado_citas_secretaria');
Route::get('pacientes','CitasController@pacientes');
Route::get('reservas_citas','CitasController@verListadoReservas');
Route::get('reservas_citas_doctor','CitasController@reservas_citas_doctor');
Route::post('actualizar_citas','CitasController@actualizar');
Route::resource('citas', 'CitasController')->middleware('verified');
Route::resource('catalogo/preguntas', 'catalogo\PreguntaController');
Route::get('suspender_citas','catalogo\DoctorController@suspender');
Route::post('desactivar','catalogo\DoctorController@desactivar');
Route::post('activar','catalogo\DoctorController@activar');
Route::get('desactivar_citas','catalogo\DoctorController@desactivar_citas');
Route::get('activar_citas','catalogo\DoctorController@activar_citas');

Route::resource('admin_citas', 'AdminCitasController');
Route::get('get_horarios', 'AdminCitasController@get_horarios');
Route::get('validation_email', 'CitasController@validation_email');


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






