<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateParticipacoesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('participacoes', function(Blueprint $table)
		{
			$table->engine = 'InnoDB';
			
			$table->increments('id');
			$table->integer('tipo_id')->unsigned()->nullable();
			$table->string('nome_disco');
			$table->string('capa_participacao');
			$table->string('capa_sm');
			$table->integer('anos_id')->unsigned()->nullable();
		});
		Schema::table('participacoes', function($table) {
			$table->foreign('anos_id')->references('id')->on('anos')->onDelete('CASCADE')->onUpdate('CASCADE');
		});
		Schema::table('participacoes', function($table) {
			$table->foreign('tipo_id')->references('id')->on('tipo')->onDelete('CASCADE')->onUpdate('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('participacoes');
	}

}
