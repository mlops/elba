<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExtrasTable extends Migration {
		/**
		 * Run the migrations.
		 *
		 * @return void
		 */
		public function up()
		{
			Schema::create('extras', function(Blueprint $table)
			{

				$table->engine = 'InnoDB';

				$table->increments('id')->unsigned();
				$table->string('extras');
				$table->string('extras_s');
				$table->integer('disco_id')->unsigned()->nullable();
			});
			Schema::table('extras', function($table) {
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
			Schema::drop('extras');
		}

	}
