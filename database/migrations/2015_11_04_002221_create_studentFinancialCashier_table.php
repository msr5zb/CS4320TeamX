<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentFinancialCashierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('studentFinancialCashier');
        Schema::create('studentFinancialCashier', function (Blueprint $table) {
            $table->integer('requestId')->unsigned();
            $table->boolean('generalInquiryView');
            $table->boolean('cashGroupPostView');
            $table->boolean('cashGroupPostUpdate');
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
        Schema::drop('studentFinancialCashier');
    }
}
