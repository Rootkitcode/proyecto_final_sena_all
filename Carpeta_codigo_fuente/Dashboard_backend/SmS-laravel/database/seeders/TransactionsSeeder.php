<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transactions')->insert([
            'to_add' => 'hola,buenas',
            'to_bal' => '100',
            'from_add' => 'Armenia',
            'from_bal'=> 'Bogota',
            'amount' => '10.000',
            'type' => 'sms',
            'trx' => '200',
            'id_user'=> 1,
            'id_plans' =>1
        ]);
        DB::table('transactions')->insert([
            'to_add' => 'hola,Adios',
            'to_bal' => '100',
            'from_add' => 'medellin',
            'from_bal'=> 'Bogota',
            'amount' => '10.000',
            'type' => 'sms',
            'trx' => '200',
            'id_user'=> 1,
            'id_plans' =>1
        ]);
    }
}
