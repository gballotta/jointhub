<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreaTabellaCourses extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('courses', function($table)
		{
			$table->increments('id');
			$table->string('nome', 128);
			$table->string('tagline', 128);
			$table->integer('teacher_id');
			$table->text('descrizione');
			$table->text('programma');
			$table->boolean('tag_workshop');
			$table->boolean('tag_corso');
			$table->boolean('tag_gratis');
			$table->integer('min_partecipanti');
			$table->integer('max_partecipanti');
			$table->integer('prezzo');
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
		Schema::drop('courses');
	}

}
