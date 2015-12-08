<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class About extends Migration {
	
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::dropIfExists('about');
        Schema::create('about', function (Blueprint $table) {
            $table->smallInteger('ferpaScore');
            $table->string('userSSO', 6)->unique()->references('userSSO')->on('users');
            $table->primary('userSSO');
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
