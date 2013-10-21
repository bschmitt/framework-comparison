<?php

// Add this line
use LaravelBook\Ardent\Ardent;

class EventController extends BaseController
{

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showList()
	{
		return View::make('list')->with('events', Events::all());
	}

	public function showAdd()
	{
		return View::make('add')->with('event', new Events());

	}

	public function postAdd()
	{
		$event = array(
			'title'       => Input::get('title'),
			'description' => Input::get('description'),
			'date'        => Input::get('date'),
			'time'        => Input::get('time'),
			'location'    => Input::get('location'),
		);

		$rules = array(
			'title' => 'required|min:3|max:255'
		);

		$validation = Validator::make($event, $rules);
		if ($validation->fails()) {
			return Redirect::to('add')->withErrors($validation);
		}

		Events::create($event);

		return Redirect::to('/');
	}

}