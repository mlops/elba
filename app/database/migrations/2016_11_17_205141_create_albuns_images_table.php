<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAlbunsImagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('albuns_images', function(Blueprint $table)
		{
			$table->engine = 'InnoDB';
			$table->increments('id');
			$table->integer('albuns_id')->unsigned()->nullable();
			$table->string('imgs_album');
			$table->timestamp('created_at')->nullable();
			$table->timestamp('updated_at')->nullable();
		});
		 Schema::table('albuns_images', function($table) {
		    $table->foreign('albuns_id')->references('id')->on('albuns')->onDelete('CASCADE')->onUpdate('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('albuns_images');
	}

}
