<?php

namespace App\Http\Controllers;

use App\catalogo\Categoria;
use App\catalogo\Doctor;
use App\catalogo\Especialidad;
use App\catalogo\Horario;
use App\catalogo\PerfilProfesional;
use App\catalogo\Pregunta;
use Illuminate\Support\Facades\Hash;
use App\Cita;
use App\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;
use RegistersUsers;
use Mail;
use App\Mail\EnviarMail;
use App\Role;

class CitasController extends Controller
{
    public function index()
    {
        $categorias = Categoria::where('Activo', '=', 1)->get();
        $especialidades = Especialidad::where('Activo', '=', 1)->get();
        return view('citas.index', ['especialidades' => $especialidades, 'categorias' => $categorias]);
    }

    public function create()
    {
        $horarios = [];
        $doctores = Doctor::where('Activo', '=', 1)->get();
        return view('citas.create', compact('doctores', 'horarios'));
    }

    public function listado_citas_secretaria(){
        $citas = Cita::with('paciente')->with('doctor')->with('espacialidad')->where('Activo','=',1)->where('Fecha','>=',Carbon::now())->orderByDesc('Fecha')->get();
        return view('citas.listado_citas',compact('citas'));
    }

    public function pacientes(){
        $rol = Role::findOrFail(4); // rol de paciente
        $pacientes = $rol->role_users;

        return view('citas.pacientes',compact('pacientes'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //d(substr($request->get('telefono'),0,4).substr($request->get('telefono'),-4));
        //validacion de dui existente
        $user_existente = User::where('dui', '=', $request->get('dui'))->first();
        if ($user_existente) {
            $horario = Horario::findOrFail($request->get('Hora'));
            //dd($horario->doctores->Especialidad );

            //$user_existente->name = $request->get('nombre');
            $user_existente->fecha_nacimiento = $request->get('fecha_nacimiento');
            $user_existente->genero = $request->get('genero');
            $user_existente->telefono = $request->get('telefono');
            $user_existente->peso = $request->get('peso');
            $user_existente->talla = $request->get('talla');
            $user_existente->email = $request->get('email');
            $user_existente->dui = $request->get('dui');
            $user_existente->password = $request->get('telefono');
            $user_existente->update();

            $cita = new Cita;
            $cita->Horario = $horario->Id;
            $cita->Fecha = $request->get('Fecha');
            $cita->Hora =  $horario->Hora;
            $cita->Paciente = $user_existente->id;
            $cita->Espacialidad = $horario->doctores->Especialidad;
            $cita->Doctor = $horario->Doctor;
            $cita->save();
        } else {
            $users = new User;
            $users->name = $request->get('nombre');
            $users->fecha_nacimiento = $request->get('fecha_nacimiento');
            $users->genero = $request->get('genero');
            $users->telefono = $request->get('telefono');
            $users->peso = $request->get('peso');
            $users->talla = $request->get('talla');
            $users->email = $request->get('email');
            $users->dui = $request->get('dui');
            $users->password = $request->get('telefono');
            $users->assignRole($request->get('rol'));
            $users->save();

            $horario = Horario::findOrFail($request->get('Hora'));
            //dd($horario->doctores->Especialidad );
            $cita = new Cita;
            $cita->Horario = $horario->Id;
            $cita->Fecha = $request->get('Fecha');
            $cita->Hora =  $horario->Hora;
            $cita->Paciente = $users->id;
            $cita->Espacialidad = $horario->doctores->Especialidad;
            $cita->Doctor = $horario->Doctor;
            $cita->save();
        }

        //   $data = 0;
        if ($request->get('email') == null) {
            //confirmacion de mensaje de texto
            $response = Http::post('http://grupomartori.com:8082/api/SMS', [
                "Tipo" => 1,
                "Telefono" => "+503" . substr($request->get('telefono'), 0, 4) . substr($request->get('telefono'), -4),
                "Texto" => "Test Clinica"
            ]);
        } else {
            //confirmacion de correo electronico
            $mailData = [
                'title' => 'Confirmar correo electrónico',
                'body' => 'This is for testing email using smtp.'
            ];

            Mail::to($request->get('email'))->send(new EnviarMail($mailData));
        }

        alert()->success('La cita ha sido agendada correctamente');
        return redirect('listado_citas');
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



    public function edit($id)
    {

        /*$doctores = Doctor::where('Activo','=',1)->get();
        $horas = array("08:00","08:30","09:00","09:30","10:00","10:30","11:00","11:30","13:00","13:30","14:00","14:30","15:00","15:30");
        foreach($doctores as $doctor)
        {
            for($i=0;$i<count($horas);$i++)
            {
                for($j=1;$j<6;$j++)
                {
                    $horario = new Horario();
                    $horario->Dia = $j;
                    $horario->Hora = $horas[$i];
                    $horario->Doctor = $doctor->Id;
                    $horario->save();
                }

            }
        }*/

        $array_doctor = array();

        $doctores = Doctor::where('Especialidad', '=', $id)->where('Activo', '=', 1)->get();

        $date = Carbon::now();

        foreach ($doctores as $doctor) {
            array_push($array_doctor, $doctor->Id);
        }

        $array_horarios = array();
        $citas = Cita::where('Fecha', '=', $date->format('Y-m-d'))->where('Activo', '=', 1)->get();

        foreach ($citas as  $cita) {
            array_push($array_horarios, $cita->Horario);
        }
        //dd($array_horarios );

        $horarios = Horario::whereIn('Doctor', $array_doctor)->where('Activo', '=', 1)->where('Dia', '=', $date->format('w'))
            ->whereNotIn('Id', $array_horarios)->where('Hora', '>', $date->format('H:i'))->orderBy('Hora')->get();

        $perfiles_profesionales = PerfilProfesional::where('Activo', '=', 1)->get();
        $preguntas = Pregunta::where('Activo', '=', 1)->where('Especialidad', '=', $id)->get();

        return view('citas.reserva', [
            'especialidad' => Especialidad::findOrFail($id), 'doctores' => $doctores, 'horarios' => $horarios,
            'perfiles_profesionales' => $perfiles_profesionales, 'preguntas' => $preguntas
        ]);
    }

    public function get_paciente(Request $request)
    {
        //dd($request->get('Dui'));
        $usuario = User::where('dui', '=', $request->get('Dui'))->get();
        return $usuario;
    }

    public function gets_paciente(Request $request)
    {
        $usuario = User::findOrFail($request->get('Usuario'));
?>
        <script>
            document.getElementById('email').value = '<?php echo $usuario->email; ?>';
            document.getElementById('fecha_nacimiento').value = '<?php echo $usuario->fecha_nacimiento; ?>';
            document.getElementById('genero').value = '<?php echo $usuario->genero; ?>';
            document.getElementById('telefono').value = '<?php echo $usuario->telefono; ?>';
            document.getElementById('peso').value = '<?php echo $usuario->peso; ?>';
            document.getElementById('estatura').value = '<?php echo $usuario->talla; ?>';
        </script>
<?php
    }

    public function actualizar(Request $request)
    {
        $cita = Cita::findOrFail($request->get('cita'));
        $cita->Hora = $request->$request->get('HoraActualizada');
        $cita->update();

        alert()->success('La cita ha sido actualizada correctamente');
        return view('citas.listado');
    }



    public function citas_reserva(Request $request)
    {
        $horario = Horario::findOrFail($request->get('Horario'));
        //dd($horario->doctores->Especialidad );
        $cita = new Cita;
        $cita->Horario = $horario->Id;
        $cita->Fecha = $request->get('Fecha');
        $cita->Hora =  $horario->Hora;
        $cita->Paciente = auth()->user()->id;
        $cita->Espacialidad = $horario->doctores->Especialidad;
        $cita->Doctor = $horario->Doctor;
        $cita->save();

        alert()->success('La cita ha sido agregada correctamente');
        return redirect('citas/' . $horario->doctores->Especialidad . '/edit');
    }

    public function horarios_get(Request $request)
    {
        //logica para get_horario sin especialidad

        $date = Carbon::parse($request->get('Fecha') . ' 23:00:00');
        $now = Carbon::now();
        if ($date < $now) {
            alert()->error('La fecha ingresada no es válida');
            //return redirect('citas/' . $request->get('Especialidad') . '/edit');
        }


        $array_doctor = array();

        $doctores = Doctor::where('Especialidad', '=', $request->get('Especialidad'))->where('Activo', '=', 1)->get();


        //dd($date);
        foreach ($doctores as $doctor) {
            array_push($array_doctor, $doctor->Id);
        }

        $array_horarios = array();
        $citas = Cita::where('Fecha', '=', $date->format('Y-m-d'))->where('Activo', '=', 1)->get();


        foreach ($citas as  $cita) {
            array_push($array_horarios, $cita->Horario);
        }


        if ($date->format('Y-m-d') == $now->format('Y-m-d')) {
            $horarios = Horario::whereIn('Doctor', $array_doctor)->where('Activo', '=', 1)->where('Dia', '=', $date->format('w'))
                ->whereNotIn('Id', $array_horarios)->where('Hora', '>', $now->format('H:i'))->orderBy('Hora')->get();
        } else if ($date->format('Y-m-d') > $now->format('Y-m-d')) {
            $horarios = Horario::whereIn('Doctor', $array_doctor)->where('Activo', '=', 1)->where('Dia', '=', $date->format('w'))
                ->whereNotIn('Id', $array_horarios)->orderBy('Hora')->get();
        } else {

            $horarios = Horario::where('Id', '=', 0)->get();
        }


        $perfiles_profesionales = PerfilProfesional::where('Activo', '=', 1)->get();
        $preguntas = Pregunta::where('Especialidad', '=', $request->get('Especialidad'))->get();

        return view('citas.horarios_get', [
            'especialidad' => Especialidad::findOrFail($request->get('Especialidad')), 'doctores' => $doctores, 'horarios' => $horarios,
            'perfiles_profesionales' => $perfiles_profesionales, 'preguntas' => $preguntas
        ]);
    }

    public function get_horario(Request $request)
    {
        //logica para get_horario sin especialidad

        $date = Carbon::parse($request->get('Fecha') . ' 23:00:00');
        $now = Carbon::now();

        /* if ($date < $now) {
            alert()->error('La fecha ingresada no es válida');
            //return redirect('citas/' . $request->get('Especialidad') . '/edit');
        }


        $array_doctor = array();

        $doctores = Doctor::where('Especialidad', '=', $request->get('Especialidad'))->where('Activo', '=', 1)->get();


        //dd($date);
        foreach ($doctores as $doctor) {
            array_push($array_doctor, $doctor->Id);
        }*/

        $array_horarios = array();
        $citas = Cita::where('Fecha', '=', $date->format('Y-m-d'))->where('Activo', '=', 1)->get();


        foreach ($citas as  $cita) {
            array_push($array_horarios, $cita->Horario);
        }


        if ($date->format('Y-m-d') == $now->format('Y-m-d')) {
            $horarios = Horario::where('Doctor', '=', $request->get('Doctor'))->where('Activo', '=', 1)->where('Dia', '=', $date->format('w'))
                ->whereNotIn('Id', $array_horarios)->where('Hora', '>', $now->format('H:i'))->orderBy('Hora')->get();
        } else if ($date->format('Y-m-d') > $now->format('Y-m-d')) {
            $horarios = Horario::where('Doctor', '=', $request->get('Doctor'))->where('Activo', '=', 1)->where('Dia', '=', $date->format('w'))
                ->whereNotIn('Id', $array_horarios)->orderBy('Hora')->get();
        } else {

            $horarios = Horario::where('Id', '=', 0)->get();
        }
        //dd($horarios);

        return $horarios;
        /*view('citas.horarios_get', [
           'horarios' => $horarios,

        ]);*/
    }

    public function horario_get(Request $request)
    {
        $cita = Cita::findOrFail($request->get('Cita'));
        $date = Carbon::parse($request->get('Fecha')); //fecha de la cita
        $now = Carbon::now();

        $array_horarios = array();
        $citas = Cita::where('Fecha', '=', $date->format('Y-m-d'))->where('Activo', '=', 1)->get();


        foreach ($citas as  $cita) {
            array_push($array_horarios, $cita->Horario);
        }


        if ($date->format('Y-m-d') == $now->format('Y-m-d')) {
            $horarios = Horario::where('Doctor', '=', $cita->Doctor)->where('Activo', '=', 1)->where('Dia', '=', $date->format('w'))
                ->whereNotIn('Id', $array_horarios)->where('Hora', '>', $now->format('H:i'))->orderBy('Hora')->get();
        } else if ($date->format('Y-m-d') > $now->format('Y-m-d')) {
            $horarios = Horario::where('Doctor', '=', $cita->Doctor)->where('Activo', '=', 1)->where('Dia', '=', $date->format('w'))
                ->whereNotIn('Id', $array_horarios)->orderBy('Hora')->get();
        } else {

            $horarios = Horario::where('Id', '=', 0)->get();
        }

        return $horarios;
    }

    public function listado_reservas()
    {
        //  $usuario = User::findOrFail(auth()->user()->id);


        $doctores = Doctor::where('Activo', '=', 1)->get();

        return view('citas.listado', [
            'doctores' => $doctores,
        ]);
    }

    public function listado_reservas_doctor(Request $request)
    {
        $usuario = User::findOrFail(auth()->user()->id);
        $doctor = Doctor::where('Usuario', '=', auth()->user()->id)->first();
        $reserva = Cita::where('Doctor', '=', $doctor->Id)->whereBetween('Fecha', [$request->get('FechaInicio'), $request->get('FechaFinal')])->where('Activo', '=', 1)->get();

        return view('citas.tabla', ['reserva' => $reserva]);
    }

    public function verListadoReservas(Request $request)
    {

        $reserva = Cita::where('Doctor', '=', $request->get('Doctor'))->whereBetween('Fecha', [$request->get('FechaInicio'), $request->get('FechaFinal')])->get();

        return view('citas.tabla', ['reserva' => $reserva]);
    }
    public function reservas_citas_doctor(Request $request)
    {
        if (auth()->user()->hasRole('administrador') || auth()->user()->hasRole('Secretaria')) {
            //$doctors = Doctor::where('Activo','=',1)->get();
            $reserva = Cita::whereBetween('Fecha', [$request->get('FechaInicio'), $request->get('FechaFinal')])->where('Activo', '=', 1)->get();
        } else {
            $doctor = Doctor::where('Usuario', '=', auth()->user()->id)->first();
            $reserva = Cita::where('Doctor', '=', $doctor->Id)->whereBetween('Fecha', [$request->get('FechaInicio'), $request->get('FechaFinal')])->where('Activo', '=', 1)->get();
        }
        //dd($doctor);


        return view('citas.tabla', ['reserva' => $reserva]);
    }

    public function validation_email(Request $request)
    {
        $count = User::where('email','=',$request->get('email'))->count();

        return $count;
    }
}
