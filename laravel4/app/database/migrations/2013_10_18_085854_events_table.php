<?php

use Illuminate\Database\Migrations\Migration;

class EventsTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::drop('events');
		Schema::create('events', function ($table) {
			$table->increments('id');
			$table->string('title');
			$table->text('description');
			$table->date('date');
			$table->time('time');
			$table->string('location');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}