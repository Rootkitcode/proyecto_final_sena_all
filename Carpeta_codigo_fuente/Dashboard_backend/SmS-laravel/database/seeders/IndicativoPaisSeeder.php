<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class IndicativoPaisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('indicativo_pais')->insert([
            'pais' => 'Colombia',
            'indicativo' => '+51'
        ]);
        DB::table('indicativo_pais')->insert([
            'pais' => 'Bolivia',
            'indicativo' => '+57'
        ]);
    }
}
