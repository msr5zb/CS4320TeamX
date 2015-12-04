<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use DB;
use Session;
use App\About as About;
use App\Request as Requestz;
use App\Http\Controllers\viewController;

class ViewFormsController extends Controller {

	//constructor for FormController
	public function __construct()
	{
		$this->middleware( 'auth' );
	}
	
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $user = \Auth::user(); // Added userSSO to session var
		
		$requests = DB::table('request')->where('request.userSSO', '=', $user->userSSO) 
           ->join('about', 'request.userSSO', '=', 'about.userSSO')
           ->join('users', 'request.userSSO', '=', 'users.userSSO')
           ->join('academic_careers', 'request.requestId', '=', 'academic_careers.requestId')
           ->join('student_records', 'request.requestId', '=', 'student_records.requestId')
           ->join('admissions', 'request.requestId', '=', 'admissions.requestId')
           ->join('reserved', 'request.requestId', '=', 'reserved.requestId')
           ->join('student_financial_aid', 'request.requestId', '=', 'student_financial_aid.requestId')
           ->join('student_financial_cashier', 'request.requestId', '=', 'student_financial_cashier.requestId')
           ->select('request.*', 'about.ferpaScore', 'academic_careers.*', 'student_records.*', 'admissions.*', 'reserved.*', 'student_financial_cashier.*', 'student_financial_aid.*', 'users.*')
           ->get();

		return view( 'viewForms', compact('requests') ) ;
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
