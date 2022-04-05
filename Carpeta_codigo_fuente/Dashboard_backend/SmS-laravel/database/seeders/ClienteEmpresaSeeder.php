<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class ClienteEmpresaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('clientes_empresa')->insert([
            'nombre' => 'Santiago',
            'apellidos' => 'Diaz',
            'numero_telefono' => '3007637509',
            'pais'           => 'colombia',
            'ciudad' => 'Armenia',
            'dirreccion'           => 'Mz A C°2 b/Paisa',
            'id_user' => 1
        ]);
        DB::table('clientes_empresa')->insert([
            'nombre' => 'Mariana',
            'apellidos' => 'Diaz',
            'numero_telefono' => '3007637508',
            'pais'           => 'colombia',
            'ciudad' => 'Armenia',
            'dirreccion'           => 'Mz A C°2 b/Paisas',
            'id_user' => 2
        ]);
    }
}
