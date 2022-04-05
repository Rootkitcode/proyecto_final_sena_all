<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Roles;
use App\Models\Permission;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Roles::create(['name'=>'SuperAdmin']);
        $role2 = Roles::create(['name'=>'Administrador']);
        

        Permission::create(['name'=> 'admin.home'])->syncRoles([$role1, $role2]); //para limitar acceso a una ruta


       //categories para protejer de que los clientes no vean cieertas categorias

        Permission::create(['name'=> 'admin.messages'])->syncRoles([$role1, $role2]);
        Permission::create(['name'=> 'admin.clientes'])->syncRoles([$role1, $role2]);
        Permission::create(['name'=> 'admin.token'])->syncRoles([$role1, $role2]);
        Permission::create(['name'=> 'admin.tickets'])->syncRoles([$role1, $role2]);
        Permission::create(['name'=> 'user.profile'])->syncRoles([$role1, $role2]);
        
        Permission::create(['name'=> 'user.cambio.password'])->syncRoles([$role1]);
        Permission::create(['name'=> 'super.content'])->syncRoles([$role1]);
        Permission::create(['name'=> 'admin.content'])->syncRoles([$role2]);
    }
}