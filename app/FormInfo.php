<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class FormInfo extends Model {

	// Set what this table this point towards
	protected $table = 'form_info';

	// Tell eloquent what the primary key for table
	protected $primaryKey = 'requestId';

	// Tell eloquent that this table doesnt increment a variable
	protected $increments = true; 

	 //allow mass assignment for the following attributes
    protected $fillable = [
  		'requestId',
  		'admissions',
  		'studentRecords',
  		'finanCashier',
  		'finanAid',
  		'reserved'
    ];
}
