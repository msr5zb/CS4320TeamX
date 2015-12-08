<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class Admissions extends Request {

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
		if($in == 'Cancel'|| $in == 'Save'){
			return [];
		}
		else {
			return [
				'admissionsAccess' => 'required'
			];
		}
	}

}
