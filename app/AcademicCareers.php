<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AcademicCareers extends Model
{
    // Specified the table this model points towards
    protected $table = 'academicCareers';

	// Set the primaryKey
	protected $primaryKey = 'requestId';

	// Turn off timestamps
	public $timestamps = false;

	// Turn off increments
	public $increments = false;

    //allow mass assignment for the following attributes
    protected $fillable = [
    	'ugrd',
    	'grad',
    	'med',
    	'vetMed',
    	'law'
    ];
}
