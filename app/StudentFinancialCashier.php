<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentFinancialCashier extends Model
{
	// Set what table this points towards
	protected $table = 'student_financial_cashier';

	// Set the primary key
	protected $primaryKey = 'requestId';

	// Turn off the timestamps
	public $timestamps = false;

	// Turn off the auto incrementer
	public $increments = false;

    //allow mass assignment for the following attributes
    protected $fillable = [
	    'requestId',
	    'generalInquiryView',
		'cashGroupPostView',
		'cashGroupPostUpdate'
	];
}
