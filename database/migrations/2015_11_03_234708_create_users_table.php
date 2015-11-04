<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->string('userSSO', 6);
            $table->string('fname', 15);
            $table->string('lname', 25);
            $table->string('title', 25);
            $table->string('address', 40);
            $table->smallInteger('ferpaScore');
            $table->integer('employeeId');
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
        Schema::drop('users');
    }
}
