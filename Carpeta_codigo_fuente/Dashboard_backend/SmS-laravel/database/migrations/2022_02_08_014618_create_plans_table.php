<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',191)->nullable();
            $table->string('min',191)->nullable();
            $table->string('max',191)->nullable();
            $table->string('price',191)->nullable();
            $table->string('validity',191)->nullable();
            $table->string('support',191)->nullable();
            $table->string('reseller',191)->nullable();
            $table->string('others',191)->nullable();
            $table->tinyInteger('status')->default(1);
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
        Schema::dropIfExists('plans');
    }
}
