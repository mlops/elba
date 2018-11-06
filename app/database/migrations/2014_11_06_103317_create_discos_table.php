<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDiscosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('discos', function(Blueprint $table)
		{
			$table->engine = 'InnoDB';
			$table->increments('id')->unsigned();
			$table->string('nome_disco');
			$table->string('ano');
			$table->text('release');
			$table->text('sbr_disco');
			$table->text('fx_tecnica');
			$table->text('slug');
			$table->string('foto_fundo');
			$table->string('capa_disco');
			$table->string('capa_sm');
			$table->string('disco_tipo');
		});
	}
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('discos');
	}

}
