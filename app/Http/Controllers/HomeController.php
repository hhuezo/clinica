<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cita;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth']);  // se debe de colocar el ['auth','verified']
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        //dd("holi");
        if(auth()->user()->hasRole('administracion')){
            return view('administracion');
        }
        else if (auth()->user()->can('reserva citas')) {
            return view('welcome');
        }
        else{

            $date = Carbon::now();
            $now = $date->format('Y-m-d');

            $axo = substr($now,0,4);
            $mes = substr($now,5,2);

            $citas = Cita::whereYear('Fecha', $axo)->get();


            return view('administracion',['citas'=>$citas, 'now'=>$now]);
        }
    }
}
