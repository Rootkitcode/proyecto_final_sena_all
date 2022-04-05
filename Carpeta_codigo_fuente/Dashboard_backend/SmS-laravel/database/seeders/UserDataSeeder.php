<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users_data')->insert([
            'name' => 'SuperAdmin',
            'email' => 'super@super.com',
            'mobile' => '3007637509',
            'username' => 'SuperAdmin',
            'password' => bcrypt('super'),
            'country' => 'Colombia',
            'city' => 'Armenia',
            'post_code' => '12345',
            'address' => 'Mz A Cz 15',
            'status' => 1,
            'balance' => '100',
            'refer_by' => '1',
            'id_user' => 1,
            'id_cliente' => 1
        ]);
        DB::table('users_data')->insert([
            'name' => 'Administrador',
            'email' => 'admin@admin.com',
            'mobile' => '3007637509',
            'username' => 'Administrador',
            'password' => bcrypt('admin'),
            'country' => 'Colombia',
            'city' => 'medellin',
            'post_code' => '12346',
            'address' => 'Mz A Cz 15',
            'status' => 1,
            'balance' => '100',
            'refer_by' => '1',
            'id_user' => 1,
            'id_cliente' => 1
        ]);
        
    }
}
