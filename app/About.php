<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model {

	// Set what table this point towards
	protected $table = 'about';

	// Tell eloquent what the primary key is off this table
	protected $primaryKey = 'userSSO';

	// Tell eloquent there are no timestamps in table
	public $timestamps = false;

	// Tell eloquent that this table does increment a variable
	public $increments = false;

	 //allow mass assignment for the following attributes
    protected $fillable = [
    	'userSSO',
    	'ferpaScore'
    ];
}
