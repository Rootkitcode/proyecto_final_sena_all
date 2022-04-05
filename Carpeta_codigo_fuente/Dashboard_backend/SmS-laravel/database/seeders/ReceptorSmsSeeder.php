<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class ReceptorSmsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('receptor_sms')->insert([
            'documento' => '1005160136',
            'nombre' => 'Santiago',
            'telefono' => '3007637509',
            'ciudad' => 'armenia',
            'id_user' => 1,
            'id_plans' => 1
            
        ]);
        DB::table('receptor_sms')->insert([
            'documento' => '1005160137',
            'nombre' => 'Mari',
            'telefono' => '3007637508',
            'ciudad' => 'armenia',
            'id_user' => 1,
            'id_plans' => 2
            
        ]);
    }
}
