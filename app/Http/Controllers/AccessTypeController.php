<?php namespace App\Http\Controllers;
use App\ChromePhp as ChromePhp;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Request as Request1;
use Session;
use App\AcademicCareers as Careers; 

class AccessTypeController extends Controller {

	//ferpa Score view
	public function testScore() {
		return view('accessType.testScore');
	}
	//validate the ferpa score request and store in DB
	public function updateFScore(Requests\UpdatefScoreRequest $request) {
		// This needs to change...for security reasons...we should never access/update user table after login
		$user = \Auth::user();
		$user->update(['ferpaScore' => $request['Score']]);
	
		return redirect('accessDesc');
	}
	//Access description view
	public function accessDesc() {
		return view('accessType.accessDesc');
	}
	// Store the access description and render new view
	public function storeDesc(Requests\CreateAccTypeRequest $request) {
		
		$user = Session::get('userData');// Get userSSO from session var		
		// Insert the request description into request table
		$id = Request1::create([ 'requestDescription' => $request['accessDescription'] , 'userSSO' => $user ]);
		Session::put('requestId', $id['requestId']);// Add the requestId to the session variable

		return redirect('accessAcademic'); 
	}

	// Render the academic career selection
	public function accessAcademic() {
		return view('accessType.accessAcademic');
	}

	// Store the Academic Career selection into DB
	public function storeAccAcad(Requests\SelectAcademicCareer $request) {

		// Hold the validility of career
		$ugrd = false;
		$grad = false;
		$med = false;
		$vetMed = false;
		$law = false;

		$stuff = $request['selectCareer']; // Get the array of career boxes

		// Set career values with requested value
		foreach($stuff as $s){
			if($s == 'ugrd'){
				$ugrd = true;
			}
			else if($s == 'grad'){
				$grad = true;
			}
			else if($s == 'med'){
				$med = true;
			}
			else if($s == 'vetmed'){
				$vetMed = true;
			}
			else if($s == 'law'){
				$law = true;
			}
		}

		$rId = Session::get('requestId'); // Get requestId from session var
		// Insert into academic career table 
		Careers::create([ 'requestId' => $rId , 'ugrd' => $ugrd , 'grad' => $grad , 'med' => $med , 'vetMed' => $vetMed, 'law' => $law ]);

		return redirect('studentRecPrompt');
	}

	public function studentRecPrompt() {
		return view('accessType.accessPrompt.studentRecordsPrompt');
	}

	public function isStudentRecordsAccess(Requests\StudentRecordsPrompt $request) {

		if($request['studentPrompt'] == 'Yes') {
			return 'ToDO';
		}
		else if($request['studentPrompt'] == 'No'){
			return redirect('admissionPrompt');
		}
	}

	public function admissionPrompt(){
		return view('accessType.accessPrompt.admissionPrompt');
	}

	public function isAdmissionAccess(Requests\AdmissionPrompt $request){

		if($request['admissionPrompt'] == 'Yes') {
			return 'ToDO(yes)';
		}
		else if($request['admissionPrompt'] == 'No'){
			return 'ToDo(no)';
		}

	}
}
