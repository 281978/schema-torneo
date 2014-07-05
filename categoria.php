<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreazioneCategorie extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		/* BRACKET */
		Schema::create('categorie', function($table)
		{
			$table->engine = 'InnoDB';
		    $table->increments('id');
		    $table->string('nome')->nullable();
		    $table->string('numero')->nullable();
		    $table->string('categoria')->nullable();
			$table->string('peso')->nullable();
		    $table->string('braccio')->nullable();
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
		Schema::drop('categorie');
	}

}
