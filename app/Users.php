<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    //allow mass assignment for the following attributes
    protected $fillable = [
    	'userSSO', 
    	'fname', 
    	'lname', 
    	'title',
    	'address',
    	'password',
    	'employeeId',
    	'ferpaScore'
    ];
}
