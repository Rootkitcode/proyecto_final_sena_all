<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class RegistroClientesPlanesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('registro_clientes_planes')->insert([
            'email' => 'ejemplo@ejemplo.com',
            'nombre_empresa' => 'Empresa1',
            'nit_empresa' => '1005160',
            'ciudad' => 'Armenia',
            'telefono' => '3007637509',
            'representante'=> 'Fulanito',
            'planes_sms'=> 'plan1',
            'sms_1_alerta'=>'mensaje',
            'sms_2_alerta'=>'mensaje',
            'id_plans'=> 1,
            'id_support_messages' =>1

        ]);
        DB::table('registro_clientes_planes')->insert([
            'email' => 'ejemplo@ejemplo.com',
            'nombre_empresa' => 'Empresa2',
            'nit_empresa' => '1005161',
            'ciudad' => 'Armenia',
            'telefono' => '3007637509',
            'representante'=> 'Fulanito',
            'planes_sms'=> 'plan2',
            'sms_1_alerta'=>'mensaje',
            'sms_2_alerta'=>'mensaje',
            'id_plans'=> 1,
            'id_support_messages' =>1

        ]);
    }
}
