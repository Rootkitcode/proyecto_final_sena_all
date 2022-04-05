<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class SupportMessagesSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('support_messages')->insert([
            'support_ticket_id' => '001',
            'type_message' => 1,
            'message' => 'la base fallo',
            'id_user'        => 1
        ]);
    }
}
