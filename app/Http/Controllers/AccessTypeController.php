<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AccessTypeController extends Controller {

	//ferpa Score view
	public function testScore() {

		return view('accessType.testScore');
	}
	//validate the ferpa score request and store in DB
	public function updateFScore(Requests\UpdatefScoreRequest $request) {
		
		$user = \Auth::user();

		$user->update(['ferpaScore' => $request['Score']]);
		//var_dump($user);
		return redirect('accessDesc');

	}
	//Access description view
	public function accessDesc() {

		return view('accessType.accessDesc');
	}
	// This is still not working  
	public function store(Requests\CreateAccTypeRequest $request) {

		$requestTable = new \Request;
		$requestTable->create(['accessDescription' => $request['accDesc']]);	

		var_dump($requestTable);
	}
}
