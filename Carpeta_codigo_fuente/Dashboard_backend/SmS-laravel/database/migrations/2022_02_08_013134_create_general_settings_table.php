<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeneralSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('general_settings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',191)->nullable();
            $table->string('base_color',191)->nullable();
            $table->string('currency_symbol',191)->nullable();
            $table->tinyInteger('email_verification')->nullable();
            $table->tinyInteger('sms_verification')->default(0);
            $table->tinyInteger('email_notification')->nullable();
            $table->tinyInteger('sms_notification')->nullable();
            $table->tinyInteger('recaptcha')->default(1);
            $table->string('site_key',191)->nullable();
            $table->string('secret_key',191)->nullable();
            $table->string('sms_charge',191)->nullable();
            $table->string('default_gateway',191)->nullable();
            $table->string('e_sender',191)->nullable();
            $table->longText('e_message')->nullable();
            $table->text('sms_api')->nullable();
            $table->longText('contact_address');
            $table->string('contact_phone',191)->nullable();
            $table->string('contact_email',191)->nullable();
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
        Schema::dropIfExists('general_settings');
    }
}
