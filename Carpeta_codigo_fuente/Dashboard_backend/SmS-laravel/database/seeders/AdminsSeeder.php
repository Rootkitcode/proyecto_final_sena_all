<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AdminsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'name' => 'SuperAdmin',
            'email' => 'super@super.com',
            'username' => 'SuperAdmin',
            'password'=> bcrypt('super'),
            'id_user'=> 1
        ]);
        DB::table('admins')->insert([
            'name' => 'Administrador',
            'email' => 'admin@admin.com',
            'username' => 'Administrador',
            'password'=> bcrypt('admin'),
            'id_user'=> 2
        ]);
    }
}
