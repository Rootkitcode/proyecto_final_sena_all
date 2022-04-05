<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticket', function (Blueprint $table) {
                $table->increments('id');
                $table->string('correo_to')->nullable();
                $table->string('correo_from')->nullable();
                $table->string('asunto')->nullable();
                $table->string('mensaje')->nullable();
                $table->string('estado')->nullable();
                $table->string('token')->nullable()->unique();
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
        Schema::dropIfExists('ticket');
    }
}
