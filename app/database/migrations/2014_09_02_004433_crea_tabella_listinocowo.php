<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreaTabellaListinocowo extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cowoprices', function($table)
		{
			$table->increments('id');
			$table->string('nome', 16);
			$table->string('tempo', 32);
			$table->integer('postazione');
			$table->integer('scontocorsi');
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
		Schema::drop('cowoprices');
	}

}