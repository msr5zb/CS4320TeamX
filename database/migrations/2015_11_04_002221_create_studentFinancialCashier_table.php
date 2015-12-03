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
        Schema::dropIfExists('student_financial_cashier');
        Schema::create('student_financial_cashier', function (Blueprint $table) {
            $table->integer('requestId')->unsigned();
            $table->boolean('generalInquiryView')->default(0);
            $table->boolean('cashGroupPostView')->default(0);
            $table->boolean('cashGroupPostUpdate')->default(0);
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
