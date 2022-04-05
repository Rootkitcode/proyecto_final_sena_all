<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NumerosTelefonosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('numeros_telefonos')->insert([
            'fecha' => '2022-02-23',
            'telefonos' => '3007637509',
            'id_user' => 1,
            'id_mensaje' => 1,
            'id_cliente' => 1
        ]);
        DB::table('numeros_telefonos')->insert([
            'fecha' => '2022-02-23',
            'telefonos' => '3007637509',
            'id_user' => 1,
            'id_mensaje' => 2,
            'id_cliente' => 2
        ]);
    }
}
