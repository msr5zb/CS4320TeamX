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
            $table->boolean('act');
            $table->boolean('sat');
            $table->boolean('gre');
            $table->boolean('gmat');
            $table->boolean('tofel');
            $table->boolean('ielts');
            $table->boolean('lsat');
            $table->boolean('mcat');
            $table->boolean('ap');
            $table->boolean('clep');
            $table->boolean('ged');
            $table->boolean('millers');
            $table->boolean('prax');
            $table->boolean('plamu');
            $table->boolean('base');
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
