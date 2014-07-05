<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Vincenti extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
				/*vincenti*/
		Schema::create('vincenti', function($table)
		{
			$table->engine = 'InnoDB';
		    $table->increments('id');
		    $table->string('atleta')->nullable();
		    $table->string('numero_atleta')->nullable();
		    $table->integer('vinte')->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('vincenti');
	}

}
