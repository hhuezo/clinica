<?php

namespace App\Http\Controllers;

use App\Mail\EnviarMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ClinicaController extends Controller
{
    public function consultas()
    {
        $texto = 'Consultas médicas';
        return view('consultas', ['texto' => $texto]);
    }

    public function enviarEmail(Request $request)
    {

        //confirmacion de correo electronico
        $nombre = $request->get('name');
        $email = $request->get('email');
        $telefono = $request->get('phone');
        $mensajes =$request->get('message');

        $mailData = [$nombre,$email,$telefono,$mensajes];
        Mail::to($request->get('email'))->send(new EnviarMail($mailData));

        alert()->success('Su mensaje fue enviado correctamente');
        return redirect('contacto');




      /*   $receivers = Receiver::pluck('email');
        Mail::to($receivers)->send(new EmergencyCallReceived($call)); */
    }


    public function consultas_domicilio()
    {
        $texto = 'Consultas Medicas a Domicilio';
        return view('consultas_domicilio', ['texto' => $texto]);
    }

    public function jornadas()
    {
        $texto = 'Jornadas médicas empresariales a domicilio';
        return view('jornadas', ['texto' => $texto]);
    }

    public function staff()
    {
        $texto = 'Staff';
        return view('staff', ['texto' => $texto]);
    }



    public function servicios()
    {
        $texto = '';
        return view('servicios', ['texto' => $texto]);
    }

    public function acerca()
    {
        $texto = 'Acerca de Nosotros';
        return view('acerca', ['texto' => $texto]);
    }
    public function alianzas()
    {
        return view('alianzas');
    }


    public function contacto()
    {
        alert()->success('La cita ha sido agendada correctamente');
        return view('contacto');
    }
}
