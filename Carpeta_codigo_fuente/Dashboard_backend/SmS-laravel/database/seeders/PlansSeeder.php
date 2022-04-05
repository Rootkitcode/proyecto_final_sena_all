<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class PlansSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('plans')->insert([
            'name' => 'Plan 1',
            'min' => '10',
            'max' => '100',
            'price' => '10000',
            'validity' => 'Sandbox',
            'support'           => '0',
            'status' => 1,
            'id_user' => 1,
            'id_support_messages' => 1
            
        ]);
        DB::table('plans')->insert([
            'name' => 'Plan 2',
            'min' => '100',
            'max' => '1000',
            'price' => '10000',
            'validity' => 'Sandbox',
            'support'           => '1',
            'status' => 1,
            'id_user' => 1,
            'id_support_messages' => 1
            
        ]);
    }
}
