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
use App\StudentFinancialAid as StudentFinancialAid;
use App\StudentFinancialCashier as Cashier;
use App\Reserved as Reserved;
use App\About as About;
use App\FormInfo as FormInfo;

class AccessTypeController extends Controller {

	//ferpa Score view
	public function testScore() {
		$ferpaScore = About::select('ferpaScore')->where('userSSO', Session::get('userData'))->get();
		if(count($ferpaScore) != 0)
			return redirect('accessDesc');
		return view('accessType.testScore');
	}
	public function updateTestScore()
	{
			return view('accessType.updateTestScore');
	}

	public function updateFerpaScore(Requests\UpdatefScoreRequest $request)
	{
		$user = Session::get('userData');
		About::where('userSSO', $user)->update(['ferpaScore' => $request['Score']]);
		$ferpaScore = About::select('ferpaScore')->where('userSSO', Session::get('userData'))->get();
		return redirect()->action('HomeController@index');
	}

	//validate the ferpa score request and store in DB
	public function updateFScore(Requests\UpdatefScoreRequest $request) {

		$user = Session::get('userData');

		About::create(['userSSO' => $user , 'ferpaScore' => $request['Score'] ]);

		return redirect('accessDesc');
	}

	//Access description view
	public function accessDesc() {
		return view('accessType.accessDesc');
	}

	// Store the access description and render new view
	public function storeDesc(Requests\CreateAccTypeRequest $request) {

		// Create a new FormInfo instance

		$id = FormInfo::create([]);

		// Store relavent info into session var
		Session::put('requestDescription', $request['accessDescription']);
		Session::put('requestId', $id['requestId']);

		// Redirect to the academic selection
		return redirect('accessAcademic');
	}

	// Render the academic career selection
	public function accessAcademic() {
		return view('accessType.accessAcademic');
	}

	// Store the Academic Career selection into DB
	public function storeAccAcad(Requests\SelectAcademicCareer $request) {

		// Array of columns of table
		$academicType = ['ugrd', 'grad', 'med', 'vet_med', 'law'];

		// Give everyone a value 
		$academicTypeValues = array('requestId' => Session::get('requestId'),
									'ugrd' => false,
									'grad' => false,
									'med' => false, 
									'vet_med' => false,
									'law' => false);

		// Flip through the types array to see which are found in request, If found set that to be true
		for ($i=0; $i < count($request['selectCareer']); $i++) {
			if(in_array($request['selectCareer'][$i], $academicType)) {
				$academicTypeValues[$request['selectCareer'][$i]] = true;
			}
		}

		// Store all new info in session var
		Session::put('accessAcademic', $academicTypeValues);

		if($request['store'] == 'Save'){
			return redirect('store');
		}
		else if($request['store'] == 'Cancel'){
			return redirect('cancel');
		}
		else {
			//var_dump(Session::all());
			return redirect('studentRecPrompt');
		}
	}

	// Student record prompt
	public function studentRecPrompt() {
		return view('accessType.accessPrompt.studentRecordsPrompt');
	}

	// Admission request prompt
	public function admissionPrompt(){
		return view('accessType.accessPrompt.admissionPrompt');
	}

	// Student Financial Cashier request prompt
	public function finanCashierPrompt(){
		return view('accessType.accessPrompt.finanCashierPrompt');
	}

	// Student Financial Aid request prompt
	public function finanAidPrompt() {
		return view('accessType.accessPrompt.finanAidPrompt');
	}

	// Reserved request prompt
	public function reservedPrompt(){
		return view('accessType.accessPrompt.reservedPrompt');
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

	// Check admission prompt
	public function isAdmissionAccess(Requests\AdmissionPrompt $request){

		if($request['admissionPrompt'] == 'Yes') {
			return redirect('admissionAccess');
		}
		else if($request['admissionPrompt'] == 'No'){
			return redirect('finanCashierPrompt');
		}
	}

	// Check sfCashier prompt
	public function isFinanCashier(Requests\CashierPrompt $request) {

		if($request['cashierPrompt'] == 'Yes') {
			return redirect('finanCashier');
		}
		else if($request['cashierPrompt'] == 'No'){
			return redirect('finanAidPrompt');
		}
	}

	// Check sfAid prompt
	public function isFinanAid(Requests\AidPrompt $request){

		if($request['aidPrompt'] == 'Yes') {
			return redirect('financialAidAccess');
		}
		else if($request['aidPrompt'] == 'No'){
			return redirect('reservedPrompt');
		}
	}

	// Check reserved prompt
	public function isReserved(Requests\ReservedPrompt $request){

		if($request['reservedPrompt'] == 'Yes') {
			return redirect('accessReserved');
		}
		else if($request['reservedPrompt'] == 'No'){
			return redirect('store');
		}
	}

	// View for student records access request
	public function recordAccess()
	{
		return view('accessType.recordAccess');
	}

	// View for admission access request
	public function admissionAccess() {
		return view('accessType.accessAdmission');
	}

	// View for sfCashier access request
	public function finanCashier(){
		return view('accessType.financialAccess');
	}

	// View for sfAid access request
	public function financialAidAccessShow() {

		return view('accessType.financialAidAccess');
	}

	// View for reserved access request
	public function accessReserved() {
		return view('accessType.accessReserved');
	}


	// Store student records request into DB
	public function recordAccessStore(Requests\RecordAccess $request) {

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
		
		// Store relevant info into session var
		Session::put('accessRecords', $recordTypesValues);


		if($request['store'] == 'Save'){
			return redirect('store');
		}
		else if($request['store'] == 'Cancel'){
			return redirect('cancel');
		}
		else{
			return redirect('admissionPrompt');
		}
	}

	// Store admissions request in DB
	public function storeAdmissions(Requests\Admissions $request) {

		// Array of columns of table
		$admissionsType = ['act', 'sat', 'gre', 'gmat', 'tofel', 'ielts', 'lsat', 'mcat', 'ap', 'clep', 'ged', 'millers', 'prax', 'plamu', 'base'];

		// Give everyone a value
		$admissionsTypeValues = array('requestId' => Session::get('requestId'),
									  'act' => false, 
									  'sat' => false, 
									  'gre' => false, 
									  'gmat' => false, 
									  'tofel' => false, 
									  'ielts' => false, 
									  'lsat' => false, 
									  'mcat' => false, 
									  'ap' => false, 
									  'clep' => false, 
									  'ged' => false, 
									  'millers' => false, 
									  'prax' => false, 
									  'plamu' => false, 
									  'base' => false);

		// Flip through the types array to see which are found in request, If found set that to be true
		for ($i=0; $i < count($request['admissionsAccess']); $i++) {
			if(in_array($request['admissionsAccess'][$i], $admissionsType)) {
				$admissionsTypeValues[$request['recordAccess'][$i]] = true;
			}
			else if($request['admissionsAccess'][$i] == 'selectAll'){
				for($j=0; $j < count($admissionsType); ++$j){
					$admissionsTypeValues[$admissionsType[$j]] = true;
				}
				break;
			}
		}

		// Store relevant info into session var
		Session::put('accessAdmissions', $admissionsTypeValues);

		if($request['store'] == 'Save'){
			return redirect('store');
		}
		else if($request['store'] == 'Cancel'){
			return redirect('cancel');
		}
		else{
			return redirect('finanCashierPrompt');
		}
	}

	// Store student financial cashier request into DB
	public function storeCashier(Requests\StudentFinancialCashier $request){

		$sfCashierType = ['generalInquiryView', 'cashGroupPostView', 'cashGroupPostUpdate'];
		
		$sfCashierTypeValues = array('requestId' => Session::get('requestId'),
									 'generalInquiryView' => false, 
									 'cashGroupPostView' => false, 
									 'cashGroupPostUpdate' => false);


		// Flip through the types array to see which are found in request, If found set that to be true
		for ($i=0; $i < count($request['sfCash']); $i++) {
			if(in_array($request['sfCash'][$i], $sfCashierType)) {
				$academicTypeValues[$request['sfCash'][$i]] = true;
			}
		}
		
		// Store relevant info into sessions var
		Session::put('accessSFcashier', $sfCashierTypeValues);

		if($request['store'] == 'Save'){
			return redirect('store');
		}
		else if($request['store'] == 'Cancel'){
			return redirect('cancel');
		}
		else{
			return redirect('finanAidPrompt');
		}
	}

	// Store student financial aid request into DB
	public function studentFinancialAidStore(Requests\StudentFinancialAid $request) {
		$dbFileds = [
			'requestId',
			'cashView',
			'nonFinancialAidStaff'
		];
		$dbFiledsValues = [
			'requestId' =>  Session::get('requestId'),
			'cashView' => false,
			'nonFinancialAidStaff' => false
		];
		for ($i=0; $i < count($request['fACash']); $i++) {
			if(in_array($request['fACash'][$i], $dbFileds)) {
				$dbFiledsValues[$request['fACash'][$i]] = true;
			}
		}
		
		// Store relevant info into sessions var
		Session::put('accessSFaid', $dbFiledsValues);

		if($request['store'] == 'Save'){
			return redirect('store');
		}
		else if($request['store'] == 'Cancel'){
			return redirect('cancel');
		}
		else{
			return redirect('reservedPrompt');
		}
	}

	// Store reserved access request into DB
	public function storeReserved(Requests\Reserved $request){

		$reservedType = ['immunizationView', 'immunizationUpdate', 'transferCreditAdmissionView', 'transferCreditAdmissionUpdate', 'relationshipsView', 'relationshipsUpdate', 'studentGroupsUpdate', 'accommodateSHealthUpdate', 'supportStaffView', 'supportStaffUpdate', 'advanceStandingReportView' , 'advanceStandingReportUpdate'];

		$reservedTypeValues = array('requestId' => Session::get('requestId'),
									'immunizationView' => false, 
									'immunizationUpdate' => false,
									'transferCreditAdmissionView' => false, 
									'transferCreditAdmissionUpdate' => false, 
									'relationshipsView' => false, 
									'relationshipsUpdate' => false, 
									'studentGroupsUpdate' => false, 
									'accommodateSHealthUpdate' => false, 
									'supportStaffView' => false, 
									'supportStaffUpdate' => false, 
									'advanceStandingReportView' => false, 
									'advanceStandingReportUpdate' => false);

		// Flip through the types array to see which are found in request, If found set that to be true
		for ($i=0; $i < count($request['accessReserved']); $i++) {
			if(in_array($request['accessReserved'][$i], $reservedType)) {
				$reservedTypeValues[$request['accessReserved'][$i]] = true;
			}
		}

		// Store relevant info into sessions var
		Session::put('accessReserved', $reservedTypeValues);

		if($request['store'] == 'Complete'){
			// Tell form_info that this form is complete
			$form = FormInfo::find(Session::get('requestId'));
			$form->complete = true;
			$form->save();
			return redirect('store');
		}
		else if($request['store'] =='Cancel'){
			return redirect('cancel');
		}
	}

	public function store() {

		Request1::create(['userSSO' => Session::get('userData'), 'requestId' => Session::get('requestId'), 'requestDescription' => Session::get('requestDescription')]);
		if(Session::get('accessAcademic') != NULL){
			Careers::create(Session::get('accessAcademic'));
		}
		else{
			Careers::create(['requestId' => Session::get('requestId')]);
		}
		if(Session::get('accessRecords') != NULL){
			Records::create(Session::get('accessRecords'));
		}
		else{
			Records::create(['requestId' => Session::get('requestId')]);
		}
		if(Session::get('accessAdmissions') != NULL){
			Admissions::create(Session::get('accessAdmissions'));
		}
		else{
			Admissions::create(['requestId' => Session::get('requestId')]);
		}
		if(Session::get('accessSFaid') != NULL){
			StudentFinancialAid::create(Session::get('accessSFaid'));
		}
		else{
			StudentFinancialAid::create(['requestId' => Session::get('requestId')]);
		}
		if(Session::get('accessSFcashier') != NULL){
			Cashier::create(Session::get('accessSFcashier'));
		}
		else{
			Cashier::create(['requestId' => Session::get('requestId')]);
		}
		if(Session::get('accessReserved') != NULL){
			Reserved::create(Session::get('accessReserved'));
		}
		else{
			Reserved::create(['requestId' => Session::get('requestId')]);
		}
		
		Session::forget('requestId');
		Session::forget('requestDescription');
		Session::forget('accessAcademic');
		Session::forget('accessRecords');
		Session::forget('accessAdmissions');
		Session::forget('accessSFaid');
		Session::forget('accessSFcashier');
		Session::forget('accessReserved');
		
		return redirect('home');
	}

	public function cancel() {

		$form = FormInfo::find(Session::get('requestId'));
		$form->delete();
		Session::forget('requestId');
		Session::forget('requestDescription');
		Session::forget('accessAcademic');
		Session::forget('accessRecords');
		Session::forget('accessAdmissions');
		Session::forget('accessSFaid');
		Session::forget('accessSFcashier');
		Session::forget('accessReserved');

		return redirect('home');
	}
}
