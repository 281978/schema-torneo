<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Iscritti extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		/*ISCRITTI*/
		Schema::create('iscritti', function($table)
		{
			$table->engine = 'InnoDB';
		    $table->increments('id');
		    $table->string('atleta')->nullable();
		    $table->string('numero_atleta')->nullable();
		    $table->integer('peso')->nullable();
		    $table->string('categoria')->nullable();
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
		Schema::drop('iscritti');
	}

}
