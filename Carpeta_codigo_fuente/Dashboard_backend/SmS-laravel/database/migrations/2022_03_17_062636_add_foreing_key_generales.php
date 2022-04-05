<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeingKeyGenerales extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Relacion Planes con usuarios
        Schema::connection('mysql')->table('plans', function(Blueprint $table)
        {
            $table->unsignedBigInteger('id_user')->nullable();
            $table->foreign('id_user')->references('id')->on('users');

        });
        //Relacion Numero de telefonos con usuarios
        Schema::connection('mysql')->table('numeros_telefonos', function(Blueprint $table)
        {
            $table->unsignedBigInteger('id_user')->nullable();
            $table->foreign('id_user')->references('id')->on('users');

        });
        //relacion mensajes con usuarios
        Schema::connection('mysql')->table('messages', function(Blueprint $table)
        {
            $table->unsignedBigInteger('id_user')->nullable();
            $table->foreign('id_user')->references('id')->on('users');

        });
        //relacion contiguracion general con usuarios
        Schema::connection('mysql')->table('general_settings', function(Blueprint $table)
        {
            $table->unsignedBigInteger('id_user')->nullable();
            $table->foreign('id_user')->references('id')->on('users');

        });
        //relacion soporte de mensajes con usuarios
        Schema::connection('mysql')->table('support_messages', function(Blueprint $table)
        {
            $table->unsignedBigInteger('id_user')->nullable();
            $table->foreign('id_user')->references('id')->on('users');

        });
        //relacion tansacciones con usuarios
        Schema::connection('mysql')->table('transactions', function(Blueprint $table)
        {
            $table->unsignedBigInteger('id_user')->nullable();
            $table->foreign('id_user')->references('id')->on('users');

        });
        //relacion pruebas de mensajes con usuarios
        Schema::connection('mysql')->table('prueba_sms', function(Blueprint $table)
        {
            $table->unsignedBigInteger('id_user')->nullable();
            $table->foreign('id_user')->references('id')->on('users');

        });
        //relacion mensajes en producccion con usuarios
        Schema::connection('mysql')->table('receptor_sms', function(Blueprint $table)
        {
            $table->unsignedBigInteger('id_user')->nullable();
            $table->foreign('id_user')->references('id')->on('users');

        });
        //relacion token para el api con usuarios
        Schema::connection('mysql')->table('token_api', function(Blueprint $table)
        {
            $table->unsignedBigInteger('id_user')->nullable();
            $table->foreign('id_user')->references('id')->on('users');

        });
        //relacion administradores con usuarios
        Schema::connection('mysql')->table('admins', function(Blueprint $table)
        {
            $table->unsignedBigInteger('id_user')->nullable();
            $table->foreign('id_user')->references('id')->on('users');

        });
        
        //relacion datos del usuario con usuarios
        Schema::connection('mysql')->table('users_data', function(Blueprint $table)
        {
            $table->unsignedBigInteger('id_user')->nullable();
            $table->foreign('id_user')->references('id')->on('users');

        });
        //relacion registro de mensajes con usuarios
        Schema::connection('mysql')->table('sms_logs', function(Blueprint $table)
        {
            $table->unsignedBigInteger('id_user')->nullable();
            $table->foreign('id_user')->references('id')->on('users');

        });
        //relacion clientes de la empresa con usuarios
        Schema::connection('mysql')->table('clientes_empresa', function(Blueprint $table)
        {
            $table->unsignedBigInteger('id_user')->nullable();
            $table->foreign('id_user')->references('id')->on('users');

        });
        //relacion registro de clientes en los planes con planes
        Schema::connection('mysql')->table('registro_clientes_planes', function(Blueprint $table)
        {
            $table->unsignedInteger('id_plans')->nullable();
            $table->foreign('id_plans')->references('id')->on('plans');
        });
        //relacion transacciones con planes
        Schema::connection('mysql')->table('transactions', function(Blueprint $table)
        {
            $table->unsignedInteger('id_plans')->nullable();
            $table->foreign('id_plans')->references('id')->on('plans');
        });
        //relacion receptor del mensaje con planes
        Schema::connection('mysql')->table('receptor_sms', function(Blueprint $table)
        {
            $table->unsignedInteger('id_plans')->nullable();
            $table->foreign('id_plans')->references('id')->on('plans');
        });
        //relacion prueba del mensaje con planes
        Schema::connection('mysql')->table('prueba_sms', function(Blueprint $table)
        {
            $table->unsignedInteger('id_plans')->nullable();
            $table->foreign('id_plans')->references('id')->on('plans');
        });
        //relacion numero de los clientes con mensajes
        Schema::connection('mysql')->table('numeros_telefonos', function(Blueprint $table)
        {
            $table->unsignedInteger('id_mensaje')->nullable();
            $table->foreign('id_mensaje')->references('id')->on('messages');
        });
        //relacion numero de los clientes con clientes
        Schema::connection('mysql')->table('numeros_telefonos', function(Blueprint $table)
        {
            $table->unsignedInteger('id_cliente')->nullable();
            $table->foreign('id_cliente')->references('id')->on('clientes_empresa');
        });
        //relacion planes con soporte de mensajes
        Schema::connection('mysql')->table('plans', function(Blueprint $table)
        {
            $table->unsignedInteger('id_support_messages')->nullable();
            $table->foreign('id_support_messages')->references('id')->on('support_messages');
        });
        //relacion registro de planes de los clientes con soporte de mensajes
        Schema::connection('mysql')->table('registro_clientes_planes', function(Blueprint $table)
        {
            $table->unsignedInteger('id_support_messages')->nullable();
            $table->foreign('id_support_messages')->references('id')->on('support_messages');
        });
        //Relacion de cliente empresa y users_data
        Schema::connection('mysql')->table('users_data', function (Blueprint $table) {
            $table->unsignedInteger('id_cliente')->nullable();
            $table->foreign('id_cliente')->references('id')->on('clientes_empresa');
        });
        Schema::connection('mysql')->table('ticket', function (Blueprint $table) {
            $table->unsignedBigInteger('id_user')->nullable();
            $table->foreign('id_user')->references('id')->on('users');
        });
        Schema::connection('mysql')->table('respuesta_ticket', function (Blueprint $table) {
            $table->unsignedBigInteger('id_user')->nullable();
            $table->foreign('id_user')->references('id')->on('users');
        });
        Schema::connection('mysql')->table('support_tickets', function (Blueprint $table) {
            $table->unsignedBigInteger('id_user')->nullable();
            $table->unsignedInteger('id_respuesta')->nullable();
            $table->foreign('id_respuesta')->references('id')->on('respuesta_ticket');
            $table->foreign('id_user')->references('id')->on('users');
        });
        Schema::connection('mysql')->table('sms_logs', function (Blueprint $table) {
            $table->unsignedInteger('id_numero_telefono')->nullable();
            $table->foreign('id_numero_telefono')->references('id')->on('numeros_telefonos');
        });
        Schema::connection('mysql')->table('sms', function (Blueprint $table) {
            $table->unsignedBigInteger('id_user')->nullable();
            $table->foreign('id_user')->references('id')->on('users');
        });
        Schema::connection('mysql')->table('respuesta_ticket', function (Blueprint $table) {
            $table->string('token')->nullable()->unique();
            $table->foreign('token')->references('token')->on('ticket');
        });
        // //relacion usuarios con los roles
        // Schema::connection('mysql')->table('users', function(Blueprint $table)
        // {
        //     $table->unsignedBigInteger('id_rol');
        //     $table->foreign('id_rol')->references('id')->on('roles');
        // });
        // //relacion sesion con usuarios
        // Schema::connection('mysql')->table('sessions', function(Blueprint $table)
        // {
        //     $table->unsignedBigInteger('id_user');
        //     $table->foreign('id_user')->references('id')->on('users');

        // });
        // //relacion token de acceso personal con usuarios
        // Schema::connection('mysql')->table('personal_access_tokens', function(Blueprint $table)
        // {
        //     $table->unsignedBigInteger('id_user');
        //     $table->foreign('id_user')->references('id')->on('users');

        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
