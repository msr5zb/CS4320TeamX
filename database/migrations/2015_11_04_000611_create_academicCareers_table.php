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
            $table->integer('id')->unsigned();
            $table->boolean('ugrd')->default(0);
            $table->boolean('grad')->default(0);
            $table->boolean('med')->default(0);
            $table->boolean('vetMed')->default(0);
            $table->boolean('law')->default(0);
            $table->foreign('id')->references('id')->on('request');
            $table->primary('id');
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
