<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOperadorasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('operadoras', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nome', 100);
			$table->string('codigo', 10)->unique();
			$table->string('categoria',20);
			$table->decimal('preco',5,2);
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
		Schema::drop('operadoras');
	}

}
