<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SmsGatewaysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sms_gateways')->insert([
            'name' => 'Card 1',
            'val1' => '10000',
            'val2' => '10000',
            'val3' => '10000',
            'status' => 1,
        ]);
    }
}
