<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Eliminati extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		/*eliminati*/
		Schema::create('eliminati', function($table)
		{
			$table->engine = 'InnoDB';
		    $table->increments('id');
		    $table->string('atleta')->nullable();
		    $table->string('numero_atleta')->nullable();
		    $table->integer('eliminato')->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('eliminati');
	}

}
