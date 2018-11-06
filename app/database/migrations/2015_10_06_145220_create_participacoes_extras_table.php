<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateParticipacoesExtrasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('participacoes_extras', function(Blueprint $table)
		{
			$table->engine = 'InnoDB';
			$table->increments('id');
			$table->integer('participacoes_id')->unsigned()->nullable();
			$table->string('faixa_titulo');
			$table->string('compositor');
			$table->text('dolp');
			$table->text('letra');
			$table->text('creditos');
			$table->string('faixa_mp3');
		});
		 Schema::table('participacoes_extras', function($table) {
		    $table->foreign('participacoes_id')->references('id')->on('participacoes')->onDelete('CASCADE')->onUpdate('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('participacoes_extras');
	}

}
