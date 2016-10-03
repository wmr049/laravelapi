<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdicionaRelContatoOperadora extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('contatos', function(Blueprint $table)
        {
            $table->integer('operadora_id')->unsigned();
			$table->foreign('operadora_id', 'fkContatos_Operadora_id_Id')
                ->references('id')
                ->on('operadoras');
        });		
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('contatos', function(Blueprint $table)
        {
            $table->dropColumn('operadora_id');
        }); 
	}

}
