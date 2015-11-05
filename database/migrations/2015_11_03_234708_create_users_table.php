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
            $table->increments('id');
            $table->string('userSSO', 6)->unique();
            $table->string('fname', 15);
            $table->string('lname', 25);
            $table->string('title', 25);
            $table->string('address', 40);
            $table->smallInteger('ferpaScore');
            $table->integer('employeeId');
            $table->string('password', 60);
            $table->rememberToken();
            $table->timestamps();
        });

        DB::table('users')->insert(
            array(
            'userSSO' => 'drrkvf',
            'fname' => 'Dustin',
            'lname' => 'Rios',
            'title' => 'Cheif Database Bro',
            'address' => '303 Foxfire Drive',
            'ferpaScore' => 10,
            'employeeId' => 124123,
            )
        );
        DB::table('users')->insert(
         array(
            'userSSO' => 'kgh458',
            'fname' => 'Karolina',
            'lname' => 'Hryszko',
            'title' => 'Ms.',
            'address' => '98 East Avenue',
            'ferpaScore' => 69,
            'employeeId' => 282828,
        )  
        );        

        DB::table('users')->insert(
         array(
            'userSSO' => 'mjk8v2',
            'fname' => 'Mikey',
            'lname' => 'Wikey',
            'title' => 'What?',
            'address' => '123 Columbia Street',
            'ferpaScore' => 43,
            'employeeId' => 234252,
        )  
        );

        DB::table('users')->insert(
         array(
            'userSSO' => 'wdmpp5',
            'fname' => 'William',
            'lname' => 'Minerd',
            'title' => 'Slacker',
            'address' => '763 Road',
            'ferpaScore' => 97,
            'employeeId' => 827423,
        )  
        );

        DB::table('users')->insert(
         array(
            'userSSO' => 'msr5zb',
            'fname' => 'Michael',
            'lname' => 'Rallo',
            'title' => 'Hacker',
            'address' => '762 Road',
            'ferpaScore' => 01,
            'employeeId' => 827371,
        )  
        ); 

        DB::table('users')->insert(
         array(
            'userSSO' => 'jkdt2',
            'fname' => 'Jayanth',
            'lname' => 'I Cant Spell It',
            'title' => 'Head Programmer of Stuff',
            'address' => '761 Road',
            'ferpaScore' => 00,
            'employeeId' => 918242,
        )  
        );                              
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
