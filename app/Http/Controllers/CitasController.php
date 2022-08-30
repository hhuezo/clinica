<?php

namespace App\Http\Controllers;

use App\catalogo\Categoria;
use App\catalogo\Doctor;
use App\catalogo\Especialidad;
use App\catalogo\Horario;
use App\catalogo\PerfilProfesional;
use App\Cita;
use Illuminate\Http\Request;
use Carbon\Carbon;

class CitasController extends Controller
{
    public function index()
    {
        $categorias = Categoria::where('Activo','=',1)->get();
        $especialidades = Especialidad::where('Activo','=',1)->get();
        return view('citas.index',['especialidades'=>$especialidades,'categorias'=>$categorias]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    public function edit($id)
    {

        /*$doctores = Doctor::where('Activo','=',1)->get();
        $horas = array("08:00","08:30","09:00","09:30","10:00","10:30","11:00","11:30","13:00","13:30","14:00","14:30","15:00","15:30");
        foreach($doctores as $doctor)
        {
            for($i=0;$i<count($horas);$i++)
            {
                for($j=1;$j<6;$j++)
                {
                    $horario = new Horario();
                    $horario->Dia = $j;
                    $horario->Hora = $horas[$i];
                    $horario->Doctor = $doctor->Id;
                    $horario->save();
                }

            }
        }*/




        $array_doctor = array();

        $doctores = Doctor::where('Especialidad','=',$id)->where('Activo','=',1)->get();

        $date = Carbon::now();

        foreach($doctores as $doctor)
        {
            array_push($array_doctor,$doctor->Id);
        }

        $array_horarios = array();
        $citas = Cita::where('Fecha','=',$date->format('Y-m-d'))->where('Activo','=',1)->get();

        foreach( $citas as  $cita)
        {
            array_push($array_horarios,$cita->Horario);
        }
        //dd($array_horarios );

        $horarios = Horario::whereIn('Doctor',$array_doctor)->where('Activo','=',1)->where('Dia','=',$date->format('w'))
        ->whereNotIn('Id',$array_horarios)->orderBy('Hora')->get();

        $perfiles_profesionales = PerfilProfesional::where('Activo','=',1)->get();

        return view('citas.reserva', ['especialidad' => Especialidad::findOrFail($id),'doctores' => $doctores,'horarios' => $horarios,
        'perfiles_profesionales' => $perfiles_profesionales]);
    }


    public function citas_reserva(Request $request)
    {
        $horario = Horario::findOrFail($request->get('Horario'));
        //dd($horario->doctores->Especialidad );
        $cita = new Cita;
        $cita->Horario = $horario->Id;
        $cita->Fecha = $request->get('Fecha');
        $cita->Hora =  $horario->Hora;
        $cita->Paciente = auth()->user()->id;
        $cita->Espacialidad = $horario->doctores->Especialidad;
        $cita->Doctor = $horario->Doctor;
        $cita->save();

        alert()->success('La cita ha sido agregada correctamente');
        return redirect('citas/' . $horario->doctores->Especialidad . '/edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
