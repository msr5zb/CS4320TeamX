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
            $table->integer('requestId')->unsigned();
            $table->string('userSSO', 6);
            $table->string('requestDescription', 100);
            $table->timestamps();
            $table->foreign('requestId')->references('requestId')->on('form_info');
            $table->foreign('userSSO')->references('userSSO')->on('users');
            $table->primary('requestId');
            $table->index('userSSO');
            $table->index(['userSSO','requestId']);
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
