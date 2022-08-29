<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClinicaController extends Controller
{
    public function consultas()
    {
        $texto = 'Consultas médicas';
        return view('consultas',['texto'=>$texto]);
    }


    public function consultas_domicilio()
    {
        $texto = 'Consultas Medicas a Domicilio';
        return view('consultas_domicilio',['texto'=>$texto]);
    }

    public function jornadas()
    {
        $texto = 'Jornadas médicas empresariales a domicilio';
        return view('jornadas',['texto'=>$texto]);
    }

    public function staff()
    {
        $texto = 'Staff';
        return view('staff',['texto'=>$texto]);
    }



    public function servicios()
    {
        $texto = '';
        return view('servicios',['texto'=>$texto]);
    }

    public function acerca()
    {
        $texto = 'Acerca de Nosotros';
        return view('acerca',['texto'=>$texto]);
    }
    public function alianzas()
    {
        return view('alianzas');
    }


    public function contacto()
    {
        return view('contacto');
    }


}
