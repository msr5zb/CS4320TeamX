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
            $table->integer('requestId')->unsigned();
            $table->boolean('cashView');
            $table->boolean('nonFinancialAidStaff');
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
        Schema::drop('studentFinancialAid');
    }
}
