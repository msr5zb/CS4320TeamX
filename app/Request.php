<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Request extends Model {

	// Specified the table this model points towards
	protected $table = 'request';

	// Eloquent automatically sets primaryKey to 'id', thus we have to tell specify to eloquent
	protected $primaryKey = 'requestId';

	// Tell Eloquent that this table does not increment a variable
	public $increments = false;

	// Turn on timestamps (Not: eloquent tries to update these every inserts and updates;)
	public $timestamps = true; // We do have timestamps defined in this table

	// For Mass assignment, Will throw an error if attempt to mass assign with a variable thats not defined in this array 
	protected $fillable = ['requestId', 'userSSO', 'requestDescription'];

	// Have to tell model the relationship it has with another table
	public function owner() {
		$this->belongsTo('User', 'userSSO');
	}

}
 