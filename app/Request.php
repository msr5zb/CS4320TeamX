<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Request extends Model {

	//
	protected $table = 'request';


	protected $fillable = ['userSSO', 'requestDescription'];

}
