<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserved extends Model
{
	// Tell eloquent what table this points towards
	protected $table = 'reserved';

	// Set primary Key 
	protected $primaryKey = 'requestId';

	// Turn off the timestamps
	public $timestamps = false;

	// Turn off the incrementer
	public $increments = false;

    //allow mass assignment for the following attributes
    protected $fillable = [
    	'requestId',
    	'immunizationView',
		'immunizationUpdate',
		'transferCreditAdmissionView',
		'transferCreditAdmissionUpdate',
		'relationshipsView',
		'relationshipsUpdate',
		'studentGroupsView',
		'studentGroupsUpdate',
		'accommodateSHealthUpdate',
		'supportStaffView',
		'supportStaffUpdate',
		'advanceStandingReportView',
		'advanceStandingReportUpdate'
    ];
}
