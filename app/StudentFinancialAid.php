<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentFinancialAid extends Model
{
    //allow mass assignment for the following attributes
    protected $fillable = [
    	'cashView',
		'nonFinancialAidStaff'
	];
}
