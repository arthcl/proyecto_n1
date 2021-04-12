<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //PERMISOS
		$permission_array = [];
			array_push($permission_array, Permission::create(['name' => 'crear_fluidos']));
			array_push($permission_array, Permission::create(['name' => 'editar_fluidos']));
			array_push($permission_array, Permission::create(['name' => 'eliminar_fluidos']));
			$viewFluidsPermissions = Permission::create(['name' => 'ver_fluidos']);
			array_push($permission_array, $viewFluidsPermissions);
		

    	//ROLES y asignación de permisos
        $role_admin = Role::create(['name' => 'administrador']);
        $role_admin->syncPermissions($permission_array);
       
        $role_tester = Role::create(['name' => 'tester']);
        $role_tester->givePermissionTo($viewFluidsPermissions);

        //crea usuario
        $user_admin = User::create([
           // 'name' => $data['name'],
        	'name' => 'administrador',
            'email' => 'admin@emg.cl',
            'password' => Hash::make('admin'),
        ])->assignRole('administrador');

        $user_test = User::create([
           // 'name' => $data['name'],
        	'name' => 'tester',
            'email' => 'tester@emg.cl',
            'password' => Hash::make('tester'),
        ])->assignRole('tester');

	
	
    }
}
