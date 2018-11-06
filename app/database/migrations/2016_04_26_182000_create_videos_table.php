<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVideosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('videos', function(Blueprint $table)
		{
			$table->increments('id')->unsigned();
			$table->string('video');
			$table->string('link');
			$table->text('embed');
			$table->string('ano');
			$table->integer('dvds_id')->unsigned()->nullable();
			$table->timestamp('created_at')->nullable();
			$table->timestamp('updated_at')->nullable();
		});
		Schema::table('videos', function($table) {
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
		Schema::drop('videos');
	}

}
