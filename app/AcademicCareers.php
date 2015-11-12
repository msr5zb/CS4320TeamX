<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AcademicCareers extends Model
{
    //allow mass assignment for the following attributes
    protected $fillable = [
    	'ugrd',
    	'grad',
    	'med',
    	'vetMed',
    	'law'
    ];
}
