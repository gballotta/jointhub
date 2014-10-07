<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreaTabellaPersons extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('persons', function($table)
		{
			$table->increments('id');
			$table->string('cognome', 32);
			$table->string('nome', 32);
			$table->string('luogonascita', 32)->nullable();
			$table->date('datanascita')->nullable();
			$table->string('indirizzo', 128);
			$table->string('localita', 128);
			$table->string('comune', 128);
			$table->string('provincia', 2);
			$table->string('nazione', 32);
			$table->string('codicefiscale', 16);
			$table->string('partitaiva', 11)->nullable();
			$table->string('telefono', 16)->nullable();
			$table->string('email', 64);
			$table->integer('role_id');
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
		Schema::drop('persons');
	}

}
