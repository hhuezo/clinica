<?php

namespace App\Http\Controllers\catalogo;

use App\catalogo\Categoria;
use App\catalogo\Especialidad;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\catalogo\EspecialidadFormRequest;

class EspecialidadController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        if ($request) {

            $especialidades = Especialidad::with('categoria')->where('Activo', '=', '1')->get();

            //dd($especialidades);
            return view('catalogo.especialidad.index', ['especialidades' => $especialidades]);
        }
    }

    public function create()
    {
        $categoria = Categoria::get();

       // dd($categoria);
        return view("catalogo.especialidad.create", ["categoria" => $categoria]);
    }

    public function store(EspecialidadFormRequest $request)
    {
        $especialidad = new Especialidad;
        $especialidad->Nombre = $request->get('Nombre');


        if ($request->file('Foto')) {
            $especialidad = Especialidad::findOrFail($request->get('Especialidad'));
            $Foto = $request->file('Foto');
            $NombreFoto =   uniqid() . ' ' . $Foto->getClientOriginalName();
            $path = public_path() . '/fotos';
            $Foto->move($path, $NombreFoto);
            $especialidad->Foto = $NombreFoto;
            $especialidad->save();
        }

        $especialidad->Categoria = $request->get('Categoria');
        $especialidad->Activo = '1';
        $especialidad->save();
        alert()->success('El registro ha sido agregado correctamente');
        return Redirect::to('catalogo/especialidad/create');
    }


    public function edit($id)
    {
        $especialidad = Especialidad::with('categoria')->where('Id', '=', $id)->first();
        $categoria = Categoria::get();

        return view('catalogo.especialidad.edit', ['especialidad' => Especialidad::findOrFail($id),'categoria' => $categoria,]);

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
