<?php namespace App\Http\Controllers;
use App\ChromePhp as ChromePhp;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Request as Request1;
use Session;
use App\AcademicCareers as Careers;
use App\StudentRecords as Records;
use App\Admissions as Admissions; 

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

		$inR = $request['selectCareer']; // Get the array of career boxes

		// Set career values with requested value
		foreach($inR as $s){
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
	// Student record prompt
	public function studentRecPrompt() {
		return view('accessType.accessPrompt.studentRecordsPrompt');
	}
	// Check student records prompt
	public function isStudentRecordsAccess(Requests\StudentRecordsPrompt $request) {

		if($request['studentPrompt'] == 'Yes') {
			return redirect('recordAccess');
		}
		else if($request['studentPrompt'] == 'No'){
			return redirect('admissionPrompt');
		}
	}

	public function recordAccess()
	{
		return view('accessType.recordAccess');
	}

	// Admission request prompt
	public function admissionPrompt(){
		return view('accessType.accessPrompt.admissionPrompt');
	}
	// Check admission prompt 
	public function isAdmissionAccess(Requests\AdmissionPrompt $request){

		if($request['admissionPrompt'] == 'Yes') {
			return redirect('admissionAccess');
		}
		else if($request['admissionPrompt'] == 'No'){
			return 'ToDo(no)';
		}
	}
	// View for admission access request 
	public function admissionAccess() {
		return view('accessType.accessAdmission');
	}

	public function storeAdmissions(Requests\Admissions $request) {
		
		// Set all variable to false
		$act = false;
		$sat = false;
		$gre = false;
		$gmat = false;
		$tofel = false;
		$ielts = false;
		$lsat = false;
		$mcat = false;
		$ap = false;
		$clep = false;
		$ged = false;
		$millers = false;
		$prax = false;
		$pla_mu = false;
		$base = false;

		// Get the array of inputs 
		$inR = $request['admissionsAccess'];

		// Determine the validity 
		foreach($inR as $s) {
			if($s == 'selectAll') {
				$act = true;
				$sat = true;
				$gre = true;
				$gmat = true;
				$tofel = true;
				$ielts = true;
				$lsat = true;
				$mcat = true;
				$ap = true;
				$clep = true;
				$ged = true;
				$millers = true;
				$prax = true;
				$pla_mu = true;
				$base = true;
				break;
			}
			if($s == 'act') {
				$act = true;
			}
			else if($s == 'sat'){
				$sat = true;
			}
			else if($s == 'gre'){
				$gre = true;
			}
			else if($s == 'gmat'){
				$gmat = true;
			}
			else if($s == 'tofel'){
				$tofel = true;
			}
			else if($s == 'ielts'){
				$ielts = true;
			}
			else if($s == 'lsat'){
				$lsat = true;
			}
			else if($s == 'mcat'){
				$mcat = true;
			}
			else if($s == 'ap'){
				$ap = true;
			}
			else if($s == 'clep'){
				$clep = true;
			}
			else if($s == 'ged'){
				$ged = true;
			}
			else if($s == 'millers'){
				$millers = true;
			}
			else if($s == 'prax'){
				$prax = true;
			}
			else if($s == 'pla_mu'){
				$pla_mu = true;
			}
			else if($s == 'base'){
				$base = true;
			}
		}
		$rId = Session::get('requestId'); // Get requestId from session var
		// Insert into admissions table 
		Admissions::create(['requestId' => $rId , 'act' => $act , 'sat' => $sat , 'gre' => $gre , 'gmat' => $gmat , 'tofel' => $tofel , 'ielts' => $ielts , 'lsat' => $lsat , 'mcat' => $mcat , 'ap' => $ap , 'clep' => $clep , 'ged' => $ged , 'millers' => $millers , 'prax' => $prax , 'plamu' => $pla_mu , 'base' => $base ]);

		return redirect('finanCashierPrompt');

	}
	public function recordAccessStore(Requests\RecordAccess $request)
	{
		$recordTypes = ['basicInquiryView',
		'advancedInquiryView',
		'advancedInquiryUpdate',
		'threeCsView',
		'threeCsUpdate',
		'advisorUpdate',
		'departmentSOCUpdate',
		'serviceIndicatorsView',
		'serviceIndicatorsUpdate',
		'studentGroupView',
		'studyListView',
		'registerEnrollmentView',
		'registerEnrollmentUpdate',
		'advisorStudentCenterView',
		'classPermissionView',
		'classPermissionUpdate',
		'classRosterView',
		'blockEnrollmentsView',
		'blockEnrollmentsUpdate',
		'reportManagerView',
		'selfServiceAdvisorUpdate',
		'fiscalOfficerView',
		'acadmenicAdvisingProfileUpdate'];
		$recordTypesValues = array('requestId' => Session::get('requestId'),
		'basicInquiryView' => false,
		'advancedInquiryView' => false,
		'advancedInquiryUpdate' => false,
		'threeCsView' => false,
		'threeCsUpdate' => false,
		'advisorUpdate' => false,
		'departmentSOCUpdate' => false,
		'serviceIndicatorsView' => false,
		'serviceIndicatorsUpdate' => false,
		'studentGroupView' => false,
		'studyListView' => false,
		'registerEnrollmentView' => false,
		'registerEnrollmentUpdate' => false,
		'advisorStudentCenterView' => false,
		'classPermissionView' => false,
		'classPermissionUpdate' => false,
		'classRosterView' => false,
		'blockEnrollmentsView' => false,
		'blockEnrollmentsUpdate' => false,
		'reportManagerView' => false,
		'selfServiceAdvisorUpdate' => false,
		'fiscalOfficerView' => false,
		'acadmenicAdvisingProfileUpdate' => false);
		for ($i=0; $i < count($request['recordAccess']); $i++) {
			if(in_array($request['recordAccess'][$i], $recordTypes)) {
				$recordTypesValues[$request['recordAccess'][$i]] = true;
			}
		}
		Records::create($recordTypesValues);
		return redirect('admissionPrompt');
	}

	public function finanCashierPrompt(){
		return view('accessType.accessPrompt.finanCashierPrompt');
	}
	

	public function isFinanCashier(Requests\CashierPrompt $request) {

		if($request['cashierPrompt'] == 'Yes') {
			return 'ToDo(yes)';
		}
		else if($request['cashierPrompt'] == 'No'){
			return redirect('finanAidPrompt');
		}
	}

	public function finanAidPrompt() {
		return view('accessType.accessPrompt.finanAidPrompt');
	}

	public function isFinanAid(Requests\AidPrompt $request){

		if($request['aidPrompt'] == 'Yes') {
			return 'ToDo(yes)';
		}
		else if($request['aidPrompt'] == 'No'){
			return 'ToDo(no)';
		}
	}	
}
