<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admissions extends Model
{
    // Set what table this points towards
    protected $table = 'admissions';

	// Set the primary key 
	protected $primaryKey = 'requestId';

	// Turn off timestamps
	public $timestamps = false;

	// Turn off incrementer 
	public $increments = false;

    //allow mass assignment for the following attributes
    protected $fillable = [
    	'requestId',
        'act',
    	'sat',
    	'gre',
    	'gmat',
    	'tofel',
    	'ielts',
    	'lsat',
    	'mcat',
    	'ap',
    	'clep',
    	'ged',
    	'millers',
    	'prax',
    	'plamu',
    	'base'
    ];
}
