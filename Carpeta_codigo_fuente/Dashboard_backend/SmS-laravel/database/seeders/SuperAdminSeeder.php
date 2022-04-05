<?php

namespace Database\Seeders;

use App\Models\Admin\Usuarios;
use App\Models\User;
use App\Models\Roles;
use App\Models\Permission;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superAdmin = User::create([
            'name' => 'SuperAdmin',
            'email' => 'super@super.com',
            'password'=> bcrypt('super'),
            // 'password' => bcrypt('admin'),
        ]);
        $superAdmin->assignRole('SuperAdmin');
        $admin = User::create([
            'name' => 'Administrador',
            'email' => 'admin@admin.com',
            'password'=> bcrypt('admin'),
            // 'password' => bcrypt('admin'),
        ]);
        $admin->assignRole('Administrador');
    }
}
