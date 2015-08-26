<?php

Class Category extends Eloquent {

	protected $guarded = [
		'id',
	];

	protected $table = 'categories';
}