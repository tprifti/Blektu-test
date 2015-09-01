<?php

class Foto extends Eloquent {

	protected $guarded = [ 
		'id'
	];

	protected $table = 'images';

	public $timestamps = false;

	
	
}