<?php

namespace App\Http\Controllers\seguridad;

use App\Http\Controllers\Controller;
use App\Permission;
use App\Role;
use Illuminate\Http\Request;

class RolePermissionController extends Controller
{
    public function add_permiso(Request $request)
    {
       
        $role = Role::findOrFail($request->get('Rol'));
        $role->rolePermissions()->attach($request->get('Permiso'));

        alert()->success('El registro ha sido agregado correctamente');
        return redirect('seguridad/role/' . $request->get('Rol') . '/edit');
    }

    public function delete_permiso(Request $request)
    {
        $role = Role::findOrFail($request->get('Rol'));
        $role->rolePermissions()->detach($request->get('Permiso'));
        alert()->error('El registro ha sido eliminado correctamente');
        return redirect('seguridad/role/' . $request->get('Rol') . '/edit');
    }
}
