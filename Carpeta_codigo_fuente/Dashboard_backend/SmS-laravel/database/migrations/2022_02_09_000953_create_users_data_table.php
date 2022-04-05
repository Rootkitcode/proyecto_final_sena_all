<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_data', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('mobile')->nullable();
            $table->string('username')->nullable();
            $table->string('password')->nullable();
            $table->string('profile_photo_path')->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('post_code')->nullable();
            $table->text('address')->nullable();
            $table->string('remember_token',100)->nullable();
            $table->tinyInteger('status')->default(1)->nullable();
            $table->string('verification_code')->nullable();
            $table->tinyInteger('email_verify')->default(1)->nullable();
            $table->tinyInteger('sms_verify')->default(1)->nullable();
            $table->tinyInteger('two_step_verify')->default(0)->nullable();
            $table->tinyInteger('two_step_verification')->default(1)->nullable();
            $table->string('two_step_code')->nullable()->nullable();
            $table->string('balance')->default(0)->nullable();
            $table->string('refer_by')->default(0)->nullable();
            // $table->string('api_key')->nullable();
            // $table->string('sms')->default(0);
            // $table->string('gateway')->default(0);
            // $table->tinyInteger('roll')->default(0);
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
        Schema::dropIfExists('users_data');
    }
}
