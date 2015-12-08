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
            $table->increments('requestId');
            $table->boolean('complete')->default(0);
            $table->timestamps();
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
