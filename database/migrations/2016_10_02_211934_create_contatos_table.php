<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContatosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contatos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nome', 100);
			$table->string('telefone', 20);
			$table->dateTime('data');
			$table->string('cor', 15);
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
		Schema::drop('contatos');
	}

}
