<?php namespace App\Http\Controllers;

use Session;
use App\About as About;
class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$user = \Auth::user(); // Added userSSO to session var
		Session::put('userData', $user->userSSO);
		$ferpaScore = About::select('ferpaScore')->where('userSSO', Session::get('userData'))->get();
		if(count($ferpaScore) != 0){
			return view('home')->with('showValue', 'show');
		} else {
			return view('home')->with('showValue', 'hidden');
		}
	}

}
