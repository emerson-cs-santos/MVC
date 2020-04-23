<?php

use Illuminate\Database\Seeder;
use App\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class SeederUsuarioAdmin extends Seeder
{
    public function run()
    {
        $user = User::create([
                'name' => 'Emerson 3',
                'email' => 'emersoncst2@outlook.com.br',
                'password' => bcrypt('12345678')]);

        $role = Role::create(['name' => 'Admin']);

        $permissions = Permission::pluck('id','id')->all();

        $role->syncPermissions($permissions);

        $user->assignRole([$role->id]);

       // PARA APLICAR EM UM USUÁRIO
        //$user = User::find(2);
        //$user->assignRole(1);
    }
}
