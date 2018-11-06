<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNewsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('news', function(Blueprint $table)
		{
				
			$table->engine = 'InnoDB';
			
			$table->increments('id')->unsigned();
			$table->integer('author_id');
			$table->text('slugs');
			$table->string('title');
			$table->text('article');
			$table->string('img');
			$table->string('fonte');
			//$table->timestamps();
			$table->timestamp('created_at')->nullable();
			$table->timestamp('updated_at')->nullable();
		});
		//  Schema::table('news', function($table) {
		//     $table->foreign('user_id')->references('id')->on('users')->onDelete('CASCADE')->onUpdate('CASCADE');
		// });
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('news');
	}

}
