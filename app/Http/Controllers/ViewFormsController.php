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

		$requests = DB::table('request')->select('requestId')->where('request.userSSO', '=', $user->userSSO)->get();
		Session::forget('requestView');
		foreach ($requests as $req) {
			$form_info = DB::table('form_info')->select('requestId','complete','admissions','studentRecords', 'finanCashier', 'finanAid', 'reserved', 'created_at', 'updated_at')->where('form_info.requestId', '=', $req->requestId)->get();
			Session::push('requestView', $form_info[0]);
		}
		// var_dump(Session::get('requestView'));
		$requestView = Session::get('requestView');
		return view( 'viewForms', compact('requestView'));
	}
	public function viewRequest(Requests\ViewForms $request)
	{
		var_dump($request['requestView']);
		//TO DO
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
