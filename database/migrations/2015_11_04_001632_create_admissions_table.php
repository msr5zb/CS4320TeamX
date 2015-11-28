<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('admissions');
        Schema::create('admissions', function (Blueprint $table) {
            $table->integer('requestId')->unsigned();
            $table->boolean('act')->default(0);
            $table->boolean('sat')->default(0);
            $table->boolean('gre')->default(0);
            $table->boolean('gmat')->default(0);
            $table->boolean('tofel')->default(0);
            $table->boolean('ielts')->default(0);
            $table->boolean('lsat')->default(0);
            $table->boolean('mcat')->default(0);
            $table->boolean('ap')->default(0);
            $table->boolean('clep')->default(0);
            $table->boolean('ged')->default(0);
            $table->boolean('millers')->default(0);
            $table->boolean('prax')->default(0);
            $table->boolean('plamu')->default(0);
            $table->boolean('base')->default(0);
            $table->foreign('requestId')->references('requestId')->on('request');
            $table->primary('requestId');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('admissions');
    }
}
