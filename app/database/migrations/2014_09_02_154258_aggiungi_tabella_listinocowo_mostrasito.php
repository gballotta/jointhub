<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AggiungiTabellaListinocowoMostrasito extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('cowoprices', function($table)
		{
		    $table->boolean('mostrasusito');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('cowoprices', function($table)
		{
		    $table->dropcolumn('mostrasusito');
		});
	}

}
