<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcademicCareersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('academicCareers');
        Schema::create('academicCareers', function (Blueprint $table) {
            $table->integer('requestId')->unsigned();
            $table->boolean('ugrd');
            $table->boolean('grad');
            $table->boolean('med');
            $table->boolean('vetMed');
            $table->boolean('law');
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
        Schema::drop('academicCareers');
    }
}
