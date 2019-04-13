<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMcalendarsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mcalendars', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->dateTime('schedule_start')->nullable();
			$table->dateTime('schedule_end')->nullable();
			$table->integer('user_id')->nullable();
			$table->string('schedule_name')->nullable();
			$table->text('schedule_description', 65535)->nullable();
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('mcalendars');
	}

}
