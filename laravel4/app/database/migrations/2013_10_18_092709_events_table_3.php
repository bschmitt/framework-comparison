<?php

use Illuminate\Database\Migrations\Migration;

class EventsTable3 extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('events', function($table)
		{
		    //$table->timestamps('created_at');
		    $table->timestamps('updated_at');
		    $table->softDeletes('deleted_at');
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