<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserved extends Model
{
    //allow mass assignment for the following attributes
    protected $fillable = [
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
