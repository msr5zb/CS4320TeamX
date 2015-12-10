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
        Schema::dropIfExists('academic_careers');
        Schema::create('academic_careers', function (Blueprint $table) {
            $table->integer('requestId')->unsigned();
            $table->boolean('ugrd')->default(0);
            $table->boolean('grad')->default(0);
            $table->boolean('med')->default(0);
            $table->boolean('vet_med')->default(0);
            $table->boolean('law')->default(0);
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
