<?php

namespace App\Http\Controllers;

use App\catalogo\Categoria;
use App\catalogo\Doctor;
use App\catalogo\Especialidad;
use App\catalogo\PerfilProfesional;
use Illuminate\Http\Request;

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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $doctores = Doctor::where('Especialidad','=',$id)->where('Activo','=',1)->get();
        $perfiles_profesionales = PerfilProfesional::where('Activo','=',1)->get();
        return view('citas.reserva', ['categoria' => Categoria::findOrFail($id),'doctores' => $doctores,'perfiles_profesionales' => $perfiles_profesionales]);
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
