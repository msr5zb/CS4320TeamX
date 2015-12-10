<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AcademicCareers extends Model
{
    // Specified the table this model points towards
    protected $table = 'academic_careers';

	// Set the primaryKey
	protected $primaryKey = 'requestId';

	// Turn off timestamps
	public $timestamps = false;

	// Turn off increments
	public $increments = false;

    //allow mass assignment for the following attributes
    protected $fillable = [
    	'requestId',
        'ugrd',
    	'grad',
    	'med',
    	'vet_med',
    	'law'
    ];
}
