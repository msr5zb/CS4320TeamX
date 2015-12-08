<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class RecordAccess extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		$in = Request::input('store');
		if($in == 'Cancel'){
			return [];
		}
		else{
			return [
				'basicInquiryView',
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
				'acadmenicAdvisingProfileUpdate'
			];
		}
	}
}
