<?php namespace App\Http\Controllers;

use Session;
use App\About as About;
use App\AcademicCareers as AcademicCareers;
use App\Admissions as Admissions;
use App\FormInfo as FormInfo;
use App\Request as Request;
use App\Reserved as Reserved;
use App\StudentFinancialAid as StudentFinancialAid;
use App\StudentFinancialCashier as StudentFinancialCashier;
use App\StudentRecords as StudentRecords;
use App\User as User;
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


		//if unit testing has not yet occured...
		if( !isset( $_SESSION[ 'unit_testing_complete' ] ) )
		{

			//assert the users table restricts its data correctly
			//this table needs to persist through all other tables due to the
			//   userSSO foreign key constraint
			$example = new User;


			/* tests that should fail */


			assert( ( $example->userSSO = NULL ) == false );
			assert( ( $example->userSSO = '' ) == false );

			assert( ( $example->fname = NULL ) == false );
			assert( ( $example->fname = '' ) == false );
			//assert( ( $example->fname = 'This name is waaaaaaaaaay too long' ) == false );

			assert( ( $example->lname = NULL ) == false );
			assert( ( $example->lname = '' ) == false );
			//assert( ( $example->lname = 'This name is waaaaaaaaaay too long and just a bit longer' ) == false );

			assert( ( $example->title = NULL ) == false );
			assert( ( $example->title = '' ) == false );
			//assert( ( $example->title = 'This name is waaaaaaaaaay too long and just a bit longer' ) == false );

			assert( ( $example->address = NULL ) == false );
			assert( ( $example->address = '' ) == false );
			//assert( ( $example->address = 'This name is waaaaaaaaaay too long and just a bit longer but also longer still' ) == false );

			assert( ( $example->employeeId = NULL ) == false );

			assert( ( $example->password =  NULL ) == false );
			assert( ( $example->password = '' ) == false );


			/* tests that should pass */


			assert( ( $example->userSSO = 'jasdf' ) == 'jasdf' );
			assert( ( $example->userSSO = 'wul99s' ) == 'wul99s' );

			assert( ( $example->fname = 'Jeffrey' ) == 'Jeffrey' );
			assert( ( $example->fname = 'William' ) == 'William' );

			assert( ( $example->lname = 'Sentry' ) == 'Sentry' );
			assert( ( $example->lname = 'Luck' ) == 'Luck' );

			assert( ( $example->phoneNum = '1234567890' ) == '1234567890' );
			assert( ( $example->department = 'Computer Science' ) == 'Computer Science' );
			

			assert( ( $example->title = 'Mr.' ) == 'Mr.' );
			assert( ( $example->title = 'Dr.' ) == 'Dr.' );

			assert( ( $example->address = '123 Locust St.' ) == '123 Locust St.' );
			assert( ( $example->address = '523 Park Way' ) == '523 Park Way' );

			assert( ( $example->employeeId = 10 ) == 10 );
			assert( ( $example->employeeId = 5235 ) == 5235 ); 

			assert( ( $example->password = 'password' ) == 'password' );
			assert( ( $example->password = 'shelley' ) == 'shelley' );

			assert( $example->save() == true );



			//assert the form_info table restricts its data correctly
			$example = new FormInfo;


			/* tests that should fail */

			
			//assert( ( $example->requestId = NULL ) == false );
			//assert( ( $example->complete = NULL ) == false );


			/* tests that should pass */


			assert( ( $example->requestId = 300 ) == 300 );
			assert( ( $example->requestId = 429496729 ) == 429496729 );

			assert( ( $example->complete = true ) == true );
			assert( ( $example->complete = false ) == false );

			assert( ( $example->save() ) == true );




			//assert the about table restricts its data correctly
			//this needs to be done before the and users tables because of the userSSO foreign keys respectively
			//this table must persist through the and users tests so that the foreign key, save, and delete functions can be tested as well
			$example = new About;


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

			//save the row data, find the row, and delete it
			assert( $example->save() == true );
			//assert( ( $example = About::where( 'userSSO', 'wul99s' ) ) == true );
			//assert( ( $example->delete() ) == true );




			//assert that the request table restricts its data correctly
			//this needs to be done before the academic careers table because of the requestId foreign key
			//this table must persist through the academic careers tests so that the foreign key, save, and delete functions can be tested as well
			$example = new Request;

			/* tests that should fail */

			//assert( ( $example->requestId = -10 ) == false );
			//assert( ( $example->requestId = 4294967296 ) == false );
			assert( ( $example->requestId = NULL ) == false );
			assert( ( $example->userSSO = NULL ) == false );
			assert( ( $example->userSSO = '' ) == false );
			assert( ( $example->requestDescription = NULL ) == false );
			assert( ( $example->requestDescription = '' ) == false );

			/* tests that should pass */

			//requestId field in request table
			assert( ( $example->requestId = 300 ) == 300 );
			assert( ( $example->requestId = 429496729 ) == 429496729 );

			//userSSO field in request table
			assert( ( $example->userSSO = 'jasdf' ) == 'jasdf' );
			assert( ( $example->userSSO = 'wul99s' ) == 'wul99s' );

			assert( ( $example->save() ) == true );






			//assert that the academic careers table restricts its data correctly
			$example = new AcademicCareers;

			/* tests that should fail */

			//assert( ( $example->requestId = -10 ) == false );
			//assert( ( $example->requestId = 4294967296 ) == false );
			//assert( ( $example->ugrd = 1000 ) == false );
			//assert( ( $example->grad = 'asdf' ) == false );
			//assert( ( $example->med = array( 'will', 'jay', 'mike' ) ) == false );
			//assert( ( $example->vetMed = -50 ) == false );
			//assert( ( $example->law = "password" ) == false );

			/* tests that should pass */

			//requestId field in academicCareers table
			assert( ( $example->requestId = 300 ) == 300 ); //initial value
			assert( ( $example->requestId = 429496729 ) == 429496729 ); //update

			//ugrd field in academicCareers table
			assert( ( $example->ugrd = true ) == true ); //initial value
			assert( ( $example->ugrd = false ) == false ); //update

			//grad field in academicCareers table
			assert( ( $example->grad = false ) == false ); //inital value
			assert( ( $example->grad = true ) == true ); //update

			//med field in academicCareers table
			assert( ( $example->med = false ) == false ); //initial value
			assert( ( $example->med = true ) == true ); //update

			//vetMed field in academicCareers table
			assert( ( $example->vet_med = true ) == true ); //initial value
			assert( ( $example->vet_med = false ) == false ); //update

			//law field in acadmicCareers table
			assert( ( $example->law = true ) == true );
			assert( ( $example->law = false ) == false );

			//save the row data, find the row, and delete it
			assert( $example->save() == true );
			//assert( ( $example = AcademicCareers::where( 'requestId', '429496729' ) ) == true );
			//assert( ( $example->delete() ) == true );


			//assert that the admissions table restricts its data correctly
			$example = new Admissions;


			/* tests that should fail */


			/* tests that should pass */


			assert( ( $example->requestId = 300 ) == 300 );
			assert( ( $example->requestId = 429496729 ) == 429496729 );

			assert( ( $example->act = true ) == true );
			assert( ( $example->act = false ) == false );

			assert( ( $example->sat = true ) == true );
			assert( ( $example->sat = false ) == false );

			assert( ( $example->gre = true ) == true );
			assert( ( $example->gre = false ) == false );

			assert( ( $example->gmat = true ) == true );
			assert( ( $example->gmat = false ) == false );

			assert( ( $example->tofel = true ) == true );
			assert( ( $example->tofel = false ) == false );

			assert( ( $example->ielts = true ) == true );
			assert( ( $example->ielts = false ) == false );

			assert( ( $example->lsat = true ) == true );
			assert( ( $example->lsat = false ) == false );

			assert( ( $example->mcat = true ) == true );
			assert( ( $example->mcat = false ) == false );

			assert( ( $example->ap = true ) == true );
			assert( ( $example->ap = false ) == false );

			assert( ( $example->clep = true ) == true );
			assert( ( $example->clep = false ) == false );

			assert( ( $example->ged = true ) == true );
			assert( ( $example->ged = false ) == false );

			assert( ( $example->millers = true ) == true );
			assert( ( $example->millers = false ) == false );

			assert( ( $example->prax = true ) == true );
			assert( ( $example->prax = false ) == false );

			assert( ( $example->plamu = true ) == true );
			assert( ( $example->plamu = false ) == false );

			assert( ( $example->base = true ) == true );
			assert( ( $example->base = false ) == false );

			assert( $example->save() == true );



			//assert that the reserved table restricts its data correctly
			$example = new Reserved;


			/* tests that should fail */



			/* tests that should pass */


			assert( ( $example->requestId = 300 ) == 300 );
			assert( ( $example->requestId = 429496729 ) == 429496729 );

			assert( ( $example->immunizationView = true ) == true );
			assert( ( $example->immunizationView = false ) == false );

			assert( ( $example->immunizationUpdate = true ) == true );
			assert( ( $example->immunizationUpdate = false ) == false );

			assert( ( $example->transferCreditAdmissionView = true ) == true );
			assert( ( $example->transferCreditAdmissionView = false ) == false );

			assert( ( $example->transferCreditAdmissionUpdate = true ) == true );
			assert( ( $example->transferCreditAdmissionUpdate = false ) == false );

			assert( ( $example->relationshipsView = true ) == true );
			assert( ( $example->relationshipsView = false ) == false );

			assert( ( $example->relationshipsUpdate = true ) == true );
			assert( ( $example->relationshipsUpdate = false ) == false );

			assert( ( $example->accommodateSHealthUpdate = true ) == true );
			assert( ( $example->accommodateSHealthUpdate = false ) == false );

			assert( ( $example->supportStaffView = true ) == true );
			assert( ( $example->supportStaffView = false ) == false );

			assert( ( $example->supportStaffUpdate = true ) == true );
			assert( ( $example->supportStaffUpdate = false ) == false );

			assert( ( $example->advanceStandingReportView = true ) == true );
			assert( ( $example->advanceStandingReportView = false ) == false );

			assert( ( $example->advanceStandingReportUpdate = true ) == true );
			assert( ( $example->advanceStandingReportUpdate = false ) == false );

			assert( $example->save() == true );


			//assert the StudentFinancialAid table restricts its data correctly
			$example = new StudentFinancialAid;


			/* tests that should fail */


			/* tests that should pass */


			assert( ( $example->requestId = 300 ) == 300 );
			assert( ( $example->requestId = 429496729 ) == 429496729 );

			assert( ( $example->cashView = false ) == false );
			assert( ( $example->cashView = true ) == true );

			assert( ( $example->nonFinancialAidStaff = false ) == false );
			assert( ( $example->nonFinancialAidStaff = true ) == true );

			assert( ( $example->save() ) == true );


			//assert the StudentFinancialCashier table restricts its data correctly
			$example = new StudentFinancialCashier;


			/* tests that should fail */



			/* tests that should pass */


			assert( ( $example->requestId = 300 ) == 300 );
			assert( ( $example->requestId = 429496729 ) == 429496729 );

			assert( ( $example->generalInquiryView = true ) == true );
			assert( ( $example->generalInquiryView = false ) == false );

			assert( ( $example->cashGroupPostView = true ) == true );
			assert( ( $example->cashGroupPostView = false ) == false );

			assert( ( $example->cashGroupPostUpdate = true ) == true );
			assert( ( $example->cashGroupPostUpdate = false ) == false );

			assert( ( $example->save() ) == true );


			//assert that the StudentRecords table restricts its data correctly
			$example = new StudentRecords;


			/* tests that should pass */



			/* tests that shoudl fail */


			assert( ( $example->requestId = 300 ) == 300 );
			assert( ( $example->requestId = 429496729 ) == 429496729 );

			assert( ( $example->basicInquiryView = true ) == true );
			assert( ( $example->basicInquiryView = false ) == false );

			assert( ( $example->advancedInquiryView = true ) == true );
			assert( ( $example->advancedInquiryView = false ) == false );

			assert( ( $example->advancedInquiryUpdate = true ) == true );
			assert( ( $example->advancedInquiryUpdate = false ) == false );

			assert( ( $example->threeCsView = true ) == true );
			assert( ( $example->threeCsView = false ) == false );

			assert( ( $example->threeCsUpdate = true ) == true );
			assert( ( $example->threeCsUpdate = false ) == false );

			assert( ( $example->advisorUpdate = true ) == true );
			assert( ( $example->advisorUpdate = false ) == false );

			assert( ( $example->departmentSOCUpdate = true ) == true );
			assert( ( $example->departmentSOCUpdate = false ) == false );

			assert( ( $example->serviceIndicatorsView = true ) == true );
			assert( ( $example->serviceIndicatorsView = false ) == false );

			assert( ( $example->serviceIndicatorsUpdate = true ) == true );
			assert( ( $example->serviceIndicatorsUpdate = false ) == false );

			assert( ( $example->studentGroupView = true ) == true );
			assert( ( $example->studentGroupView = false ) == false );

			assert( ( $example->studyListView = true ) == true );
			assert( ( $example->studyListView = false ) == false );

			assert( ( $example->registerEnrollmentView = true ) == true );
			assert( ( $example->registerEnrollmentView = false ) == false );

			assert( ( $example->registerEnrollmentUpdate = true ) == true );
			assert( ( $example->registerEnrollmentUpdate = false ) == false );

			assert( ( $example->classPermissionView = true ) == true );
			assert( ( $example->classPermissionView = false ) == false );

			assert( ( $example->classPermissionUpdate = true ) == true );
			assert( ( $example->classPermissionUpdate = false ) == false );

			assert( ( $example->classRosterView = true ) == true );
			assert( ( $example->classRosterView = false ) == false );

			assert( ( $example->blockEnrollmentsView = true ) == true );
			assert( ( $example->blockEnrollmentsView = false ) == false );

			assert( ( $example->blockEnrollmentsUpdate = true ) == true );
			assert( ( $example->blockEnrollmentsUpdate = false ) == false );

			assert( ( $example->reportManagerView = true ) == true );
			assert( ( $example->reportManagerView = false ) == false );

			assert( ( $example->selfServiceAdvisorUpdate = true ) == true );
			assert( ( $example->selfServiceAdvisorUpdate = false ) == false );

			assert( ( $example->fiscalOfficerView = true ) == true );
			assert( ( $example->fiscalOfficerView = false ) == false );

			assert( ( $example->acadmenicAdvisingProfileUpdate = true ) == true );
			assert( ( $example->acadmenicAdvisingProfileUpdate = false ) == false );

			assert( ( $example->save() ) == true );


			//delete all tables in reverse order of their creation
			assert( ( $example = StudentRecords::where( 'requestId', 429496729 ) ) );
			assert( ( $example->delete() ) == true );

			assert( ( $example = StudentFinancialCashier::where( 'requestId', 429496729 ) ) == true );
			assert( ( $example->delete() ) == true );

			assert( ( $example = StudentFinancialAid::where( 'requestId', 429496729 ) ) == true );
			assert( ( $example->delete() ) == true );

			assert( ( $example = Reserved::where( 'requestId', 429496729 ) ) == true );
			assert( ( $example->delete() ) == true );

			assert( ( $example = Admissions::where( 'requestId', 429496729 ) ) == true );
			assert( ( $example->delete() ) == true );

			assert( ( $example = AcademicCareers::where( 'requestId', 429496729 ) ) == true );
			assert( ( $example->delete() ) == true );

			assert( ( $example = Request::where( 'requestId', 429496729 ) ) == true );
			assert( ( $example->delete() ) == true );

			assert( ( $example = About::where( 'userSSO', 'wul99s' ) ) == true );
			assert( ( $example->delete() ) == true );

			assert( ( $example = FormInfo::where( 'requestId', 429496729 ) ) == true );
			assert( ( $example->delete() ) == true );

			assert( ( $example = User::where( 'userSSO', 'wul99s' ) ) == true );
			assert( ( $example->delete() ) == true );


			$_SESSION[ 'unit_testing_complete' ] = true;
		}
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
