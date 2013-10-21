<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class Events extends Eloquent
{

	protected $table = 'events';

	protected $fillable = array(
		'title',
		'description',
		'date',
		'time',
		'location'
	);

}