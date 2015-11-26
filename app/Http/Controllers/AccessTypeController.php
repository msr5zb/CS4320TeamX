<?php namespace App\Http\Controllers;
use App\ChromePhp as ChromePhp;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Request as Request1;

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

		$requestTable = new Request1;

		$requestTable->create(['requestDescription' => $request['accDesc'], 'userSSO' => \Auth::user()->userSSO, ]);
		return redirect('recordAccess');

	}

	public function recordAccess() {
		# code...
		return view('accessType.recordAccess');
	}

// 	public function selectAcademicCareer(Requests\SelectAcademicCareer $request) {
// 		$value = $request['selCareer'];
// 		$request->session()->put('selCareer', $value);
// 		ChromePhp::log($value);
// 		return view('accessType.accessAdmission');
// 	}
// }
