<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
class SmsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sms')->insert([
            'search_type' => 4,
            'fdn' => 'ABC*',
            'consecutive' => 4,
            'city' => 'Chicago',
            'state' => 'enviado',
            'has_any_feature' => 'sms',
            'limit' => 50,
            'id_user' => 1
        ]);
    }
}
