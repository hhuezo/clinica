<?php

namespace App\Http\Controllers\seguridad;

use App\catalogo\Doctor;
use App\Http\Controllers\Controller;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function index()
    {
        $user = User::all();
        return view('seguridad.user.index', ['usuarios' => $user]);
    }

    public function create(){
        return view('auth.register');
    }
    public function agregar(){
        
        $roles = Role::get();
            return view('seguridad.user.create', ['roles' => $roles]);
    }

    public function show()
    {
        # code...
    }

    public function store(Request $request){
     
        $users = new User;
        $users->name = $request->get('name');
        $users->email = $request->get('email');
        $users->password = Hash::make($request->password);
        $users->assignRole($request->get('rol'));

        $users->save();
        alert()->success('El registro ha sido agregado correctamente');
        return Redirect::to('seguridad/users/agregar');
            
        
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        $roles_actuales = $user->userRoles;
        $array_roles_actuales = array();
        $doctor = $user->userDoctores;
        $doctores = Doctor::where('Activo','=',1)->get();
        if($roles_actuales != []){
                foreach($roles_actuales as $obj)
            {
                array_push($array_roles_actuales, $obj->id);
            }
        }else{
            $roles_actuales = [];
        }
        
        //dd($array_roles_actuales);
        if($array_roles_actuales){
            $roles = Role::whereNotIn('id',[$array_roles_actuales])->get();
        }
        else{
            $roles = Role::get();
        }


        return view('seguridad.user.edit', [
            'usuario' =>$user , 'roles' => $roles, 'roles_actuales' => $roles_actuales, 'doctor' => $doctor, 'doctores' => $doctores]);
        
    }
    public function update(Request $request, $id)
    {

        $user = User::findOrFail($id);
        if ($request->get('password') == '') {

            $user->name = $request->get('name');
            $user->email = $request->get('email');
        } else {
            $user->name = $request->get('name');
            $user->email = $request->get('email');
            $user->password = Hash::make($request->password);
        }

        $user->update();
        alert()->info('El registro ha sido modificado correctamente');
        return redirect('seguridad/user/' . $id . '/edit');
    }

    public function destroy($id)
    {
        if (auth()->user()->can('delete users')) {
            $user = User::findOrFail($id);
            $roles_actuales = $user->userRoles;

            foreach ($roles_actuales as $obj) {
                $user->removeRole( $obj->id);
            }
            $user->Activo = 0;
            $user->update();
            alert()->error('El registro ha sido eliminado correctamente');
            return Redirect::to('seguridad/user');
        } else {
            alert()->error('No tiene permisos para realizar esta accion');
            return Redirect::to('seguridad/user');
        }
    }

    public function add_rol(Request $request)
    {
        $usuario = User::findOrFail($request->get('Usuario'));
        $usuario->assignRole($request->get('Rol'));
        $usuario->save();
        alert()->success('El registro ha sido agregado correctamente');
        return redirect('seguridad/user/' . $request->get('Usuario') . '/edit');
    }

    public function delete_rol(Request $request)
    {
        $usuario = User::findOrFail($request->get('Usuario'));
        $usuario->removeRole($request->get('Rol'));
        $usuario->save();
        alert()->error('El registro ha sido eliminado correctamente');
        return redirect('seguridad/user/' . $request->get('Usuario') . '/edit');
    }
}
