<?php

use App\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissions extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       /* app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();
         // create permissions
        Permission::create( ['name' => 'create roles'] );
        Permission::create( ['name' => 'read roles'] );
        Permission::create( ['name' => 'edit roles'] );
        Permission::create( ['name' => 'delete roles'] );
        Permission::create( ['name' => 'create users'] );
        Permission::create( ['name' => 'read users'] );
        Permission::create( ['name' => 'edit users'] );
        Permission::create( ['name' => 'delete users'] );
        Permission::create( ['name' => 'create permissions'] );
        Permission::create( ['name' => 'read permissions'] );
        Permission::create( ['name' => 'edit permissions'] );
        Permission::create( ['name' => 'delete permissions'] );

        $role = Role::create( ['name' => 'administrador'] );
        $role->givePermissionTo( Permission::all() );

        $user = User::findOrFail(1);
        $user->assignRole('Administrador');

        $role = Role::findOrFail(1);
        $role->givePermissionTo( Permission::all() );

        Permission::create( ['name' => 'catalogos'] );
        Permission::create( ['name' => 'administracion usuarios'] );
        Permission::create( ['name' => 'citas doctor'] );
        Permission::create( ['name' => 'reserva citas'] );

        $role = Role::create( ['name' => 'admin'] );
        $role->givePermissionTo( Permission::all() );


        $role = Role::create( ['name' => 'doctor'] );

        $role->givePermissionTo( 'citas doctor',);

        $role = Role::create( ['name' => 'paciente'] );
        $role->givePermissionTo( 'reserva citas',);*/

        $user = User::findOrFail(2);
        $user->assignRole('paciente');
    }
}
