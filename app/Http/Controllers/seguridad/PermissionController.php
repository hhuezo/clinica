<?php

namespace App\Http\Controllers\seguridad;

use App\Http\Controllers\Controller;
use App\Http\Requests\seguridad\PermissionsFormRequest;
use App\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PermissionController extends Controller
{
    public function __construct()
    {
        $this->middleware( 'auth' );
    }
    public function index(Request $request)
    {

        if ($request) {
            $permissions = Permission::get();
            return view('seguridad.permission.index', ["permissions" => $permissions]);
        }
    }
    public function create()
    {

        return view("seguridad.permission.create");
    }
    public function store(PermissionsFormRequest $request)
    {

        $permission = Permission::create(['name' => $request->get('name')]);
        alert()->success('El registro ha sido agregado correctamente');
        return Redirect::to('seguridad/permission/create');
    }
    public function show($id)
    {
        return view("seguridad.permission.show", ["permission" => Permission::findOrFail($id)]);
    }
    public function edit($id)
    {
        return view("seguridad.permission.edit", ["permission" => Permission::findOrFail($id)]);
    }
    public function update(PermissionsFormRequest $request, $id)
    {
        $permission = Permission::findOrFail($id);
        $permission->name = $request->get('name');
        $permission->update();
        alert()->info('El registro ha sido modificado correctamente');
        return redirect('seguridad/permission/' . $id . '/edit');
    }
    public function destroy($id)
    {
        $permission = Permission::findOrFail($id);
        $permission->delete();
        alert()->error('El registro ha sido eliminado correctamente');
        return Redirect::to('seguridad/permission');
    }
}
