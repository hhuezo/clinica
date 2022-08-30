<?php

namespace App\Http\Controllers\catalogo;

use App\catalogo\Horario;
use App\catalogo\Doctor;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\catalogo\HorarioFormRequest;
use Carbon\Carbon;
class HorarioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        if ($request) {
            $dias = array("Domingo", "Lunes", "Martes","Miercoles", "Jueves", "Viernes", "Sabado");
            $horarios = Horario::with('doctores')->where('Activo', '=', '1')->get();

            //dd($especialidades);
            return view('catalogo.horario.index', ['horarios' => $horarios,'dias' => $dias]);
        }
    }


    public function create()
    { $dias = array("Domingo", "Lunes", "Martes","Miercoles", "Jueves", "Viernes", "Sabado");

        $doctores = Doctor::get();

       // dd($categoria);
        return view("catalogo.horario.create", ["doctores" => $doctores,"dias" => $dias]);
    }

    public function store(HorarioFormRequest $request)
    {
        $horario = new Horario();
        $horario->Dia = $request->get('Dia');
        $horario->Hora = $request->get('Hora');
        $horario->Doctor = $request->get('Doctor');
        $horario->Activo = '1';
        $horario->save();
        alert()->success('El registro ha sido agregado correctamente');
        return Redirect::to('catalogo/horario/create');
    }


    public function edit($id)
    {$dias = array("Domingo", "Lunes", "Martes","Miercoles", "Jueves", "Viernes", "Sabado");
        $horario = Horario::with('doctores')->where('Id', '=', $id)->first();
        $doctor = Doctor::get();

        return view('catalogo.horario.edit', ['horario' => Horario::findOrFail($id),'doctor' => $doctor,'dias' => $dias]);

    }

    public function update(EspecialidadFormRequest $request, $id)
    {
        $especialidad = Especialidad::findOrFail($id);
        $especialidad->Nombre = $request->get('Nombre');
        $especialidad->Categoria = $request->get('Categoria');
        $especialidad->update();
        alert()->info('El registro ha sido modificado correctamente');
        return redirect('catalogo/especialidad/' . $id . '/edit');
    }
    public function destroy($id)
    {
        $especialidad = Especialidad::findOrFail($id);
        $especialidad->Activo = '0';
        $especialidad->update();
        alert()->error('El registro ha sido eliminado correctamente');
        return Redirect::to('catalogo/especialidad');
    }
}
