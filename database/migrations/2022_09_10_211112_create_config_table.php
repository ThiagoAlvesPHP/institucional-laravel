<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfigTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('address_zipcode');
            $table->string('address');
            $table->string('address_number')->nullable();
            $table->string('address_district');
            $table->string('complement')->nullable();
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->string('link_whatsapp');
            $table->string('logo');
            $table->string('logo_dark');
            $table->string('favicon');
            $table->string('title');
            $table->mediumText('text');
            $table->mediumText('keywords')->nullable();
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
        Schema::dropIfExists('config');
    }
}
