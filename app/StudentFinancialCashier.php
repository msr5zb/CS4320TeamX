<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentFinancialCashier extends Model
{
    //allow mass assignment for the following attributes
    protected $fillable = [
	    'generalInquiryView',
		'cashGroupPostView',
		'cashGroupPostUpdate'
	];
}
