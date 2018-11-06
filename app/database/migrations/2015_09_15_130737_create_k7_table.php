<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateK7Table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('k7', function(Blueprint $table)
		{
			$table->engine = 'InnoDB';

			$table->increments('id')->unsigned();
			$table->integer('ano_id');
			$table->string('k7');
			$table->string('k7_sm');
			$table->integer('disco_id')->unsigned()->nullable();
			});

	Schema::table('k7', function($table) {
		$table->foreign('disco_id')->references('id')->on('discos')->onDelete('CASCADE')->onUpdate('CASCADE');
	});
	
	}
	/**
		 * Reverse the migrations.
		 *
		 * @return void
		 */
		public function down()
		{
			Schema::dropIfExists('k7');
		}

	}