<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AggiungiTabellaPersonsProfessione extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('persons', function($table)
		{
		    $table->string('professione', 64)->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('persons', function($table)
		{
		    $table->dropColumn('professione');
		});
	}

}
