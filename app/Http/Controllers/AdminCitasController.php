<?php

namespace App\Http\Controllers;

use App\catalogo\Doctor;
use App\catalogo\Horario;
use App\Cita;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class AdminCitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->get('FechaInicio') && $request->get('FechaFinal')) {
            if (auth()->user()->can('citas doctor')) {
                $doctor = Doctor::where('Usuario', '=', auth()->user()->id)->first();
                $citas = Cita::where('Doctor', '=', $doctor->Id)->whereBetween('Fecha', [$request->get('FechaInicio'), $request->get('FechaFinal')])->get();
            } else {
                $citas = Cita::whereBetween('Fecha', [$request->get('FechaInicio'), $request->get('FechaFinal')])->get();
            }
            return view('admin_citas.index', ['citas' => $citas]);
        }


        return view('admin_citas.index', ['citas' => null]);
    }


    public function edit($id)
    {
        $cita = Cita::findOrFail($id);
        $usuario = auth()->user();
        if ($usuario->hasRole('doctor')) {
            $doctores = Doctor::where('Usuario', '=', auth()->user()->id)->get();
        } else {
            $doctores = Doctor::get();
        }


        $horarios_doctor = Cita::where('Doctor','=',$cita->Doctor)->where('Fecha','=',$cita->Fecha)->where('Id','<>',$id)->get();

        $array_horarios = array();

        foreach( $horarios_doctor as $horario)
        {
            array_push($array_horarios,$horario->Hora);
        }

        $fecha = Carbon::parse($cita->Fecha);

        $horarios = Horario::where('Doctor','=',$cita->Doctor)->where('Dia','=',$fecha->format('w'))->whereNotIn('Hora',[$array_horarios])->get();



        return view('admin_citas.edit', ['cita' => $cita, 'doctores' => $doctores, 'horarios' => $horarios]);
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
        $cita = Cita::findOrFail($id);
        $horario = Horario::findOrFail($request->get('Horario'));
        $cita->Horario = $request->get('Horario');
        $cita->Hora = $horario->Hora;
        $cita->Fecha = $request->get('Fecha');
        $cita->update();

        alert()->success('La cita ha sido actualizada correctamente');
        return back();
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
