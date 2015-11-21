<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentFinancialAidTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('studentFinancialAid');
        Schema::create('studentFinancialAid', function (Blueprint $table) {
            $table->integer('id')->unsigned();
            $table->boolean('cashView')->default(0);
            $table->boolean('nonFinancialAidStaff')->default(0);
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
        Schema::drop('studentFinancialAid');
    }
}
