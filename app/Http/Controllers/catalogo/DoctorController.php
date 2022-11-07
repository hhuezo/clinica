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
use Laravel\Ui\Presets\React;

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

        if ($request->hasFile('Foto')) {
            $Foto = $request->file('Foto');
            $NombreFoto =   $Foto->getClientOriginalName();
          //  $path = public_path() . '/fotos';
            $path = public_path("dentco-html/images/");
          //  $Foto->copy($path, $NombreFoto);
            copy($Foto->getRealPath(),$path . $NombreFoto);
            $doctor->Foto = $NombreFoto;
        }
        $doctor->Titulo = $request->get('Titulo');
        $doctor->Especialidad = $request->get('Especialidad');
        $doctor->Correo = $request->get('Correo');
        $doctor->Activo = '1';
        $doctor->save();
        alert()->success('El registro ha sido agregado correctamente');
        return redirect('catalogo/doctor/' . $doctor->Id. '/edit');
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

        $perfiles_profesionales = PerfilProfesional::where('Activo', '=', 1)->where('Doctor', '=', $id)->get();

        $horarios =  Horario::where('Doctor','=',$id)->where('Activo', '=', 1)->orderBy('Dia')->orderBy('Hora')->get();


        return view('catalogo.doctor.edit', [
            'doctor' => Doctor::findOrFail($id), 'especialidad' => $especialidad, 'horarios' => $horarios,
            'perfiles_profesionales' => $perfiles_profesionales, 'dias' => $dias
        ]);
    }

    public function update(DoctorFormRequest $request, $id)
    {
        $doctor = Doctor::findOrFail($id);
        $doctor->Nombre = $request->get('Nombre');
        $doctor->Titulo = $request->get('Titulo');
        $doctor->Especialidad = $request->get('Especialidad');
        $doctor->Correo = $request->get('Correo');
        $doctor->update();
        alert()->info('El registro ha sido modificado correctamente');
        return redirect('catalogo/doctor/' . $id . '/edit');
    }


    public function agregar_horario(DoctorFormRequest $request)
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



    public function eliminar_horario(Request $request)
    {
        $horario = Horario::findOrFail($request->get('Id'));
        $horario->Activo = 0;
        $horario->update();
        alert()->error('El registro ha sido eliminado correctamente');
        return redirect('catalogo/doctor/' . $horario->Doctor . '/edit');
    }


    public function agregar_perfil(Request $request)
    {
        $perfil = new PerfilProfesional();
        $perfil->Descripcion = $request->get('Descripcion');
        $perfil->Doctor = $request->get('Id');
        $perfil->Activo = '1';
        $perfil->save();
        alert()->success('El registro ha sido agregado correctamente');
        return redirect('catalogo/doctor/' . $request->get('Id') . '/edit');
    }

    public function eliminar_perfil(Request $request)
    {
        $perfil = PerfilProfesional::findOrFail($request->get('Id'));
        $perfil->Activo = 0;
        $perfil->update();
        alert()->error('El registro ha sido eliminado correctamente');
        return redirect('catalogo/doctor/' . $perfil->Doctor . '/edit');
    }

    public function actualizar_foto(Request $request){
        $doctor = Doctor::findOrFail($request->get('doctor'));
        if ($request->hasFile('Foto')) {
            $Foto = $request->file('Foto');
            $NombreFoto =   $Foto->getClientOriginalName();
          //  $path = public_path() . '/fotos';
            $path = public_path("dentco-html/images/");
          //  $Foto->copy($path, $NombreFoto);
            copy($Foto->getRealPath(),$path . $NombreFoto);
            $doctor->Foto = $NombreFoto;
        }
        $doctor->update();
        alert()->success('La fotografia ha sido actualizada correctamente');
        return redirect('catalogo/doctor/' . $request->get('doctor'). '/edit');
    }




    public function destroy($id, DoctorFormRequest $request)
    {
        $doctor = Doctor::findOrFail($id);
        $doctor->Activo = 0;
        $doctor->update();
        alert()->error('El registro ha sido eliminado correctamente');
        return Redirect::to('catalogo/doctor');

    }

    public function suspender(){
        $now = Carbon::now();
        if(auth()->user()->hasRole('administrador') || auth()->user()->hasRole('Secretaria')){
        $citas = Cita::where('Doctor','=',auth()->user()->id)->where('Fecha','=', $now->format('Y-m-d'))->where('Hora','>',$now->format('H:i'))->get();
        }else{
            $citas = Cita::where('Doctor','=',auth()->user()->id)->where('Fecha','=', $now->format('Y-m-d'))->where('Hora','>',$now->format('H:i'))->get();
        
        }
        
        return view('catalogo.doctor.listado', compact('citas'));
    }

    public function desactivar($id){
        $cita = Cita::findOrFail($id);
        $horario = Horario::findOrFail($cita->Horario);
        $horario->Activo = 0;
        alert()->error('El registro ha sido actualizado correctamente');
        return Redirect::to('suspender_citas');
    }

    public function activar($id){
        $cita = Cita::findOrFail($id);
        $horario = Horario::findOrFail($cita->Horario);
        $horario->Activo = 1;
        alert()->error('El registro ha sido actualizado correctamente');
        return Redirect::to('suspender_citas');
    }

    public function desactivar_citas(Request $request){
        $doctor = Doctor::where('Usuario','=',auth()->user()->id)->first();
        $horarios = Horario::where('Doctor','=', $doctor->Id)->whereBetween('Fecha',[$request->get('FechaInicio'), $request->get('FechaFinal')])
        ->update(["Activo" => 0]);
        alert()->error('El registro ha sido actualizado correctamente');
        return Redirect::to('suspender_citas');
    }

    public function activar_citas(Request $request){
        $doctor = Doctor::where('Usuario','=',auth()->user()->id)->first();
        $horarios = Horario::where('Doctor','=', $doctor->Id)->whereBetween('Fecha',[$request->get('FechaInicio'), $request->get('FechaFinal')])
        ->update(["Activo" => 1]);
        alert()->error('El registro ha sido actualizado correctamente');
        return Redirect::to('suspender_citas');
    }

    
}
