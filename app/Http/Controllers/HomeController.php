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
		//add authentication middleware to home controller
		$this->middleware('auth');

		//assert all tables can be created
		assert( 'new About' == true );
		assert( 'new App\AcademicCareers' == true );
		assert( 'new App\Admissions' == true );
		assert( 'new App\ChromePhp' == true );
		assert( 'new App\FormInfo' == true );
		assert( 'new App\Request' == true );
		assert( 'new App\Reserved' == true );
		assert( 'new App\StudentFinancialAid' == true );
		assert( 'new App\StudentFinancialCashier' == true );
		assert( 'new App\StudentRecords' == true );

		//assert the about table restricts its data correctly
		$example = new \App\About;

		/* tests that should fail */

		//assert( ( $example->userSSO = 'def83ls' ) == false );
		assert( ( $example->userSSO = NULL ) == false );
		assert( ( $example->userSSO = '' ) == false );
		assert( ( $example->ferpaScore = NULL ) == false );

		/* tests that should pass */

		//userSSO field in about table
		assert( ( $example->userSSO = 'jasdf' ) == 'jasdf' ); //initial value
		assert( ( $example->userSSO = 'wul99s' ) == 'wul99s' ); //update

		
		//ferpaScore field in about table
		assert( ( $example->ferpaScore = 99 ) == 99 ); //initial value
		assert( ( $example->ferpaScore = -123) == -123 ); //update

		//save the row data and delete it
		assert( $example->save() == true );
		assert( About::where( 'userSSO', 'wul99s' )->get()->delete() == true );

		/*
		$example = new \App\AcademicCareers;
		assert( $example->destroy() == true );
		$example->destroy();

		$example = new \App\Admissions;
		assert( $example->destroy() == true );
		$example->destroy();

		$example = new \App\ChromePhp;
		assert( $example->destroy() == true );
		$example->destroy();

		$example = new \App\FormInfo;
		assert( $example->destroy() == true );
		$example->destroy();

		$example = new \App\Request;
		assert( $example->destroy() == true );
		$example->destroy();

		$example = new \App\Reserved;
		assert( $example->destroy() == true );
		$example->destroy();

		$example = new \App\StudentFinancialAid;
		assert( $example->destroy() == true );
		$example->destroy();

		$example = new \App\StudentFinancialCashier;
		assert( $example->destroy() == true );
		$example->destroy();

		$example = new \App\StudentRecords;
		assert( $example->destroy() == true );
		$example->destroy();*/

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
