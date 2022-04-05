<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class MessagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('messages')->insert([
            'mensaje' => 'Hola, Tu pedido esta en 1 min',
            'fecha' => '2021-09-07 ',
            'estado' => 'activo',
            'id_user' => 1
        ]);
        DB::table('messages')->insert([
            'mensaje' => 'Hola, Tu pedido esta en 15 min',
            'fecha' => '2021-09-07 ',
            'estado' => 'activo',
            'id_user' => 2
        ]);
    }
}
