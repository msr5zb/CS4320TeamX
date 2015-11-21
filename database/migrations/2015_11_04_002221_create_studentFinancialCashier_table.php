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
            $table->integer('id')->unsigned();
            $table->boolean('generalInquiryView')->default(0);
            $table->boolean('cashGroupPostView')->default(0);
            $table->boolean('cashGroupPostUpdate')->default(0);
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
        Schema::drop('studentFinancialCashier');
    }
}
