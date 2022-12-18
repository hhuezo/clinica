<?php

namespace App\Http\Controllers\catalogo;

use App\catalogo\Especialidad;
use App\catalogo\Pregunta;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PreguntaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $preguntas = Pregunta::where('Activo','=',1)->get();

        return view('catalogo.preguntas.index', compact('preguntas'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $especialidad = Especialidad::where('Activo','=',1)->get();
        return view('catalogo.preguntas.create', compact('especialidad'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pregunta = new Pregunta();
        $pregunta->Pregunta = $request->get('Pregunta');
        $pregunta->Respuesta = $request->get('Respuesta');
        $pregunta->Especialidad = $request->get('Especialidad');
        $pregunta->Activo = 1;
        $pregunta->save();

        alert()->success('El registro ha sido agregado correctamente');
        return Redirect::to('catalogo/preguntas/create');
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $especialidad = Especialidad::where('Activo','=',1)->get();
        return view('catalogo.preguntas.edit', ['pregunta' => Pregunta::findOrFail($id),'especialidad' => $especialidad]);
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
        $pregunta = Pregunta::findOrFail($id);
        $pregunta->Pregunta = $request->get('Pregunta');
        $pregunta->Respuesta = $request->get('Respuesta');
        $pregunta->Especialidad = $request->get('Especialidad');
        $pregunta->Activo = 1;
        $pregunta->update();

        alert()->info('El registro ha sido modificado correctamente');
        return redirect('catalogo/preguntas/' . $id . '/edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pregunta = Pregunta::findOrFail($id);
        $pregunta->Activo = '0';
        $pregunta->update();
        alert()->error('El registro ha sido eliminado correctamente');
        return Redirect::to('catalogo/preguntas');
    }
}
