<?php

namespace App\Http\Controllers\catalogo;

use App\catalogo\Doctor;
use App\catalogo\Especialidad;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\catalogo\DoctorFormRequest;
use App\Http\Requests\catalogo\HorarioFormRequest;
use Illuminate\Support\Facades\Redirect;
use App\catalogo\Horario;
use App\catalogo\PerfilProfesional;
use App\Cita;

use Carbon\Carbon;


class DoctorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        if ($request) {

            $doctores = Doctor::with('especialidad')->where('Activo', '=', '1')->get();

            //dd($especialidades);
            return view('catalogo.doctor.index', ['doctores' => $doctores]);
        }
    }

    public function create()
    {
        $especialidad = Especialidad::get();

        // dd($categoria);
        return view("catalogo.doctor.create", ["especialidad" => $especialidad]);
    }

    public function store(DoctorFormRequest $request)
    {
        $doctor = new Doctor();
        $doctor->Nombre = $request->get('Nombre');


        if ($request->file('Foto')) {
            $doctor = Doctor::findOrFail($request->get('Doctor'));
            $Foto = $request->file('Foto');
            $NombreFoto =   uniqid() . ' ' . $Foto->getClientOriginalName();
            $path = public_path() . '/fotos';
            $Foto->move($path, $NombreFoto);
            $doctor->Foto = $NombreFoto;
        }
        $doctor->Titulo = $request->get('Titulo');
        $doctor->Especialidad = $request->get('Especialidad');
        $doctor->Activo = '1';
        $doctor->save();
        alert()->success('El registro ha sido agregado correctamente');
        return Redirect::to('catalogo/doctor/create');
    }

    public function show($id)
    {
        return view('catalogo.doctor.show', ['doctor' => Doctor::findOrFail($id)]);
    }

    public function edit($id)
    {
        $doctor = Doctor::findOrFail($id);

        $especialidad = Especialidad::get();
        $date = Carbon::now();

        $array_doctor = array();



        $date = Carbon::now();



        $array_horarios = array();
        $citas = Cita::where('Fecha', '=', $date->format('Y-m-d'))->where('Activo', '=', 1)->get();


        //dd($array_horarios );
        $dias = array("Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado");

        $horario = Horario::with('doctores')->where('Id', '=', $id)->first();


        $perfiles_profesionales = PerfilProfesional::where('Activo', '=', 1)->get();

        $hoaios_actuales =  $doctor->horarios;

        $horario = Horario::where('Activo', '=', 1)->get();

        //dd($horario);

        return view('catalogo.doctor.edit', [
            'doctor' => Doctor::findOrFail($id), 'especialidad' => $especialidad, 'horario' => $horario, 'perfiles_profesionales' => $perfiles_profesionales, 'dias' => $dias, 'hoaios_actuales' => $hoaios_actuales
        ]);
    }

    public function update(DoctorFormRequest $request, $id)
    {
        $doctor = Doctor::findOrFail($id);
        $doctor->Nombre = $request->get('Nombre');
        $doctor->Titulo = $request->get('Titulo');
        $doctor->Especialidad = $request->get('Especialidad');
        $doctor->update();
        alert()->info('El registro ha sido modificado correctamente');
        return redirect('catalogo/doctor/' . $id . '/edit');
    }


    public function Horario(DoctorFormRequest $request)
    {
        $horario = new Horario();
        $horario->Dia = $request->get('Dia');
        $horario->Hora = $request->get('Hora');
        $horario->Doctor = $request->get('Id');
        $horario->Activo = '1';
        $horario->save();
        alert()->success('El registro ha sido agregado correctamente');
        return redirect('catalogo/doctor/' . $request->get('Id') . '/edit');
    }

    public function Perfil(DoctorFormRequest $request)
    {
        $perfil = new PerfilProfesional();
        $perfil->Descripcion = $request->get('Descripcion');
        $perfil->Doctor = $request->get('Id');

        $perfil->save();
        alert()->success('El registro ha sido agregado correctamente');
        return redirect('catalogo/doctor/' . $request->get('Id') . '/edit');
    }










}
