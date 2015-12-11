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
        Schema::dropIfExists('users');
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('userSSO', 6)->unique();
            $table->string('fname', 15);
            $table->string('lname', 25);
            $table->string('title', 25);
            $table->string('address', 40);
			$table->string('department', 20);
            $table->string('phoneNum', 15);
            $table->integer('employeeId');
            $table->string('password', 60);
            $table->rememberToken();
            $table->timestamps();
            $table->index('userSSO');
            $table->index('employeeId');
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
