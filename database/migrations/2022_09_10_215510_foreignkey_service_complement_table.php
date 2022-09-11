<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ForeignkeyServiceComplementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('service_complement', function (Blueprint $table) {
            $table->foreign('service_id')
                ->references('id')
                ->on('service');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('service_complement', function (Blueprint $table) {
            $table->dropForeign('service_id');
        });
    }
}
