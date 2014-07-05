<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Perdenti extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		/*perdenti*/
		Schema::create('perdenti', function($table)
		{
			$table->engine = 'InnoDB';
		    $table->increments('id');
		    $table->string('atleta')->nullable();
		    $table->string('numero_atleta')->nullable();
		    $table->integer('perse')->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('perdenti');
	}

}
