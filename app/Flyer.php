<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flyer extends Model
{	

	/**
	* 
	* @var array
	*/
	
	protected $fillable = [
		'street',
		'city',
		'country',
		'zip',
		'state',
		'price',
		'description'
	];

	public function photos()
	{
		return $this->hasMany('App\Photo');
	}
    
}
