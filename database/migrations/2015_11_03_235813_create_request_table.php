<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('request');
        Schema::create('request', function (Blueprint $table) {
            $table->increments('requestId');
            $table->string('userSSO', 6);
            $table->string('requestDescription', 100);
            $table->string('pathHash', 50);
            $table->foreign('userSSO')->references('userSSO')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('request');
    }
}
