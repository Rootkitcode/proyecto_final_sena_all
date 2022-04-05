<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistroClientesPlanesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro_clientes_planes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email')->nullable();
            $table->string('nombre_empresa')->nullable();
            $table->string('nit_empresa')->nullable();
            $table->string('ciudad')->nullable();
            $table->string('telefono')->nullable();
            $table->string('representante')->nullable();
            $table->string('planes_sms')->nullable();
            $table->string('sms_1_alerta')->nullable();
            $table->string('sms_2_alerta')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registro_clientes_planes');
    }
}
