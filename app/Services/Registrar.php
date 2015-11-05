<?php namespace App\Services;

use App\User;
use Validator;
use Illuminate\Contracts\Auth\Registrar as RegistrarContract;

class Registrar implements RegistrarContract {

	/**
	 * Get a validator for an incoming registration request.
	 *
	 * @param  array  $data
	 * @return \Illuminate\Contracts\Validation\Validator
	 */
	public function validator(array $data)
	{
		return Validator::make($data, [
			'fname' => 'required|max:255',
			'lname' => 'required|max:255',
			'title' => 'max:25',
			'address' => 'max:40',
			'userSSO' => 'required|max:6',
			'password' => 'required|confirmed|min:6',
		]);
	}

	/**
	 * Create a new user instance after a valid registration.
	 *
	 * @param  array  $data
	 * @return User
	 */
	public function create(array $data)
	{
		return User::create([
			'fname' => $data['fname'],
			'lname' => $data['lname'],
			'userSSO' => $data['userSSO'],
			'address' => $data['address'],
			'title' => $data['title'],
			'ferpaScore' => 1,
			'employeeId' => 1,
			'password' => bcrypt($data['password']),
		]);
	}

}
