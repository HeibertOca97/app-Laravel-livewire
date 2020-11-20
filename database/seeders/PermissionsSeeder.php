<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
//PROVEEDOR
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;


class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $permissions_array = [];
      //CREAMOS LOS PERMISOS
      array_push($permissions_array,Permission::create(['name' => 'user.create']));
      array_push($permissions_array,Permission::create(['name' => 'user.store']));
      array_push($permissions_array,Permission::create(['name' => 'user.show']));
      array_push($permissions_array,Permission::create(['name' => 'user.edit']));
      array_push($permissions_array,Permission::create(['name' => 'user.update']));
      array_push($permissions_array,Permission::create(['name' => 'user.destoy']));
      $permissions_lector = Permission::create(['name' => 'user.index']);
      array_push($permissions_array, $permissions_lector);
      //CREAMOS EL ROL
      $role = Role::create(['name' => 'super_admin']);
      //GUARDAMOS LOS PERMISOS PARA ESE ROL
      $role->syncPermissions($permissions_array);
      
      $role_lector = Role::create(['name' => 'Lector']);

      $role_lector->givePermissionTo($permissions_lector);

      $admin = User::create([
            'name' => 'Admin Master',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin12345'),
      ]);
      //ASIGNACION DE ROL
      $admin->assignRole('super_admin');
      
      $lector = User::create([
        'name' => 'test1',
        'email' => 'test1@gmail.com',
        'password' => Hash::make('tester123'),
      ]);
        //ASIGNACION DE ROL
      $lector->assignRole('Lector');

      User::create([
            'name' => 'test2',
            'email' => 'test2@gmail.com',
            'password' => Hash::make('tester234'),
      ]);

    }
}
