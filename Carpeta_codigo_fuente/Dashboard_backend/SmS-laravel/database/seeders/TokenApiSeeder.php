<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TokenApiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('token_api')->insert([
            'token' => uniqid(Str::random(50)),
            'id_user' => 1
        ]);
        DB::table('token_api')->insert([
            'token' => uniqid(Str::random(50)),
            'id_user' => 1
        ]);
    }
}
