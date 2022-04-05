<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SmsLogsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sms_logs')->insert([
            'number' => '3007637509',
            'status' => 1,
            'id_numero_telefono' => 1,
            'id_user'=> 1
        ]);
        DB::table('sms_logs')->insert([
            'number' => '3007637508',
            'status' => 0,
            'id_numero_telefono' => 2,
            'id_user'=> 1
        ]);
    }
}
