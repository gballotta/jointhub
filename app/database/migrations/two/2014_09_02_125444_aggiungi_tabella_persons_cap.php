<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AggiungiTabellaPersonsCap extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('persons', function($table)
		{
		    $table->string('cap', 5);
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
		    $table->dropColumn('cap');
		});
	}

}
