<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Online extends Model {

	// Specify what table this model should point towards
	protected $table = "sessions";

	// Set the primary key
	public $primaryKey = 'userSSO';

	// Turn of automatic timestamps, we do not have these defined in the table
	public $timestamps = false;

	// Mass assignment allowed entities to table
	protected $fillable = ['userSSO'];

}
