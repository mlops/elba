<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDvdimgsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dvdimgs', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('dvds_id')->unsigned()->nullable();
			$table->string('dvdimg');
			$table->string('dvd_sm');
		});
		Schema::table('dvdimgs', function($table) {
			$table->foreign('dvds_id')->references('id')->on('dvds')->onDelete('CASCADE')->onUpdate('CASCADE');
			});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('dvdimgs');
	}

}
