<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Online extends Model {

	// Specify what table this model should point towards
	protected $table = "sessions";

	// Set the primary key
	public $primaryKey = 'userSSO';

	// Turn off automatic timestamps, we do not have these defined in the table
	public $timestamps = false;

	// Turn off incrementer, since eloquent assumes that there is at least one variable that increments
	public $increments = false;

	// Mass assignment allowed entities to table
	protected $fillable = ['userSSO'];

}
