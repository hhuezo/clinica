<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
            return view('administracion');
        }
    }
}
