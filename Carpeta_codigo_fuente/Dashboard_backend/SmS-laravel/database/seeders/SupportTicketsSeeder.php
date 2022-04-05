<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SupportTicketsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('support_tickets')->insert([
            'ticket' => uniqid(Str::random(6)),
            'from_sms' => 'ejemplo@ejemplo.com',
            'to_sms' => 'smsmads@mail.com',
            'subject' => 'asunto',
            'status' => 1,
            'id_user'=> 1,
            'id_respuesta'=> 1
        ]);
        DB::table('support_tickets')->insert([
            'ticket' => uniqid(Str::random(6)),
            'from_sms' => 'ejemplo@ejemplo.com',
            'to_sms' => 'smsmads@mail.com',
            'subject' => 'asunto',
            'status' => 1,
            'id_user'=> 1,
            'id_respuesta'=> 1
        ]);
    }
}
