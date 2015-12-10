<?php
use Illuminate\Database\Seeder;
use App\User as User;

class UserTableSeeder extends Seeder {

    public function run() {
    	DB::table('users')->delete();
      
		User::create( [
          'userSSO' => 'drrkvf',
          'fname' => 'Dustin',
          'lname' => 'Rios',
          'title' => 'Cheif Database Bro',
          'address' => '303 Foxfire Drive',
          'department' => 'Computer Science',
          'phoneNum' => '(314)-812-9182',
          'employeeId' => 124123,
          'password' => bcrypt("password"),
        ] );

        User::create( [
          'userSSO' => 'kgh458',
          'fname' => 'Karolina',
          'lname' => 'Hryszko',
          'title' => 'Ms.',
          'address' => '98 East Avenue',
          'department' => 'Computer Science',
          'phoneNum' => '(314)-812-9182',
          'employeeId' => 282828,
          'password' => bcrypt("password"),
        ] );

        User::create( [
          'userSSO' => 'mjk8v2',
          'fname' => 'Mikey',
          'lname' => 'Wikey',
          'title' => 'What?',
          'address' => '123 Columbia Street',
          'department' => 'Computer Science',
          'phoneNum' => '(314)-812-9182',
          'employeeId' => 234252,
          'password' => bcrypt("password"),
        ] );

        User::create( [
          'userSSO' => 'wdmpp5',
          'fname' => 'William',
          'lname' => 'Minerd',
          'title' => 'Slacker',
          'address' => '763 Road',
          'department' => 'Computer Science',
          'phoneNum' => '(314)-812-9182',
          'employeeId' => 827423,
          'password' => bcrypt("password"),
        ] );

        User::create( [
          'userSSO' => 'msr5zb',
          'fname' => 'Michael',
          'lname' => 'Rallo',
          'title' => 'Hacker',
          'address' => '762 Road',
          'department' => 'Computer Science',
          'phoneNum' => '(314)-812-9182',
          'employeeId' => 827371,
          'password' => bcrypt("password"),
        ] );

        User::create( [
          'userSSO' => 'jkdt2',
          'fname' => 'Jayanth',
          'lname' => 'I Cant Spell It',
          'title' => 'Head Programmer of Stuff',
          'address' => '761 Road',
          'department' => 'Computer Science',
          'phoneNum' => '(314)-812-9182',
          'employeeId' => 918242,
          'password' => bcrypt("password"),
        ] );
    }
}
