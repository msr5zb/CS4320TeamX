<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentFinancialAid extends Model
{
	// Set what table this points towards
	protected $table = 'student_financial_aid';

	// Set the primary Key
	protected $primaryKey = 'requestId';

	// Turn off timestamps, since they are not included in the table
	public $timestamps = false;

	// Turn off incrementer, since eloquent assumes each table has a variable that auto increments
	public $increments = false;

    //allow mass assignment for the following attributes
    protected $fillable = [
			'requestId',
    	'cashView',
		'nonFinancialAidStaff'
	];
}
