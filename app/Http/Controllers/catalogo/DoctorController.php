<?php

namespace App\Http\Controllers\catalogo;
use App\catalogo\Doctor;
use App\catalogo\Especialidad;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\catalogo\DoctorFormRequest;
use Illuminate\Support\Facades\Redirect;
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

    public function edit($id)
    {
        $doctor = Doctor::with('especialidad')->where('Id', '=', $id)->first();
        $especialidad = Especialidad::get();

        return view('catalogo.doctor.edit', ['doctor' => Doctor::findOrFail($id),'especialidad' => $especialidad,]);

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
    public function destroy($id)
    {
        $doctor = Doctor::findOrFail($id);
        $doctor->Activo = '0';
        $doctor->update();
        alert()->error('El registro ha sido eliminado correctamente');
        return Redirect::to('catalogo/doctor');
    }
}
