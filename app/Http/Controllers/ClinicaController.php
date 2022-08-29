<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClinicaController extends Controller
{
    public function consultas()
    {
        return view('consultas');
    }


    public function consultas_domicilio()
    {
        return view('consultas_domicilio');
    }

    public function jornadas()
    {
        return view('jornadas');
    }

    public function staff()
    {
        return view('staff');
    }

    public function alianzas()
    {
        return view('alianzas');
    }


    public function contacto()
    {
        return view('contacto');
    }

    public function servicios()
    {
        return view('servicios');
    }

    public function acerca()
    {
        return view('acerca');
    }



}
