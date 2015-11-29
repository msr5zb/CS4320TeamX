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
        Schema::dropIfExists('student_financial_aid');
        Schema::create('student_financial_aid', function (Blueprint $table) {
            $table->integer('requestId')->unsigned();
            $table->boolean('cashView')->default(0);
            $table->boolean('nonFinancialAidStaff')->default(0);
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
