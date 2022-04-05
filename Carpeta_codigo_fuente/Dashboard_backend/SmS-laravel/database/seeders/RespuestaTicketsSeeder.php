<?php

namespace Database\Seeders;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RespuestaTicketsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('respuesta_ticket')->insert([
            'correo_to' => 'smsmads@ejemplo.com',
            'correo_from' => 'super@super.com',
            'asunto' => 'daño api',
            'mensaje'=> 'ksbksdbfdjksaBDKLSAdjksajkdsbajkdbsakdsaldnSJKABD',
            'token'                     => 'stBh0o622a87fcd11bf',
            'id_user'=> 1
        ]);
        DB::table('respuesta_ticket')->insert([
            'correo_to' => 'smsmads@ejemplo.com',
            'correo_from' => 'admin@admin.com',
            'asunto' => 'daño api',
            'mensaje'=> 'ksbksdbfdjksaBDKLSAdjksajkdsbajkdbsakdsaldnSJKABD',
            'token'                     => 'ZCVpmE622a87fcd1781',
            'id_user'=> 1
        ]);
    }
}
