<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FormInfo extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		 Schema::dropIfExists('form_info');
        Schema::create('form_info', function (Blueprint $table) {
            $table->integer('requestId')->unsigned();
            $table->boolean('admissions')->default(0);
            $table->boolean('studentRecords')->default(0);
            $table->boolean('finanCashier')->default(0);
            $table->boolean('finanAid')->default(0);
            $table->boolean('reserved')->default(0);
            $table->timestamps();
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
		 Schema::drop('form_info');
	}

}
