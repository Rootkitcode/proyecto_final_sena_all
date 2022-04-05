<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(RolSeeder::class);
        $this->call(SuperAdminSeeder::class);
        $this->call(AdminsSeeder::class);
        $this->call(SupportMessagesSedder::class);
        $this->call(PlansSeeder::class);
        $this->call(IndicativoPaisSeeder::class);
        $this->call(PruebaSmsSeeder::class);
        $this->call(ReceptorSmsSeeder::class);
        $this->call(MessagesSeeder::class);
        $this->call(ClienteEmpresaSeeder::class);
        $this->call(UserDataSeeder::class);
        $this->call(NumerosTelefonosSeeder::class);
        $this->call(TicketsSeeder::class);
        $this->call(RespuestaTicketsSeeder::class);
        $this->call(SupportTicketsSeeder::class);
        $this->call(TokenApiSeeder::class);
        $this->call(SmsGatewaysSeeder::class);
        $this->call(SmsLogsSeeder::class);
        $this->call(TransactionsSeeder::class);
        $this->call(RegistroClientesPlanesSeeder::class);
        $this->call(SmsSeeder::class);
    }
}
