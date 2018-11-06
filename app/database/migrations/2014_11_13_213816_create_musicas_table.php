 <?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMusicasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('musicas', function(Blueprint $table)
		{
			$table->engine = 'InnoDB';

			$table->increments('id')->unsigned();
			$table->string('faixa');
			$table->string('compositor');
			$table->text('letra');
			$table->text('creditos');
			$table->text('faixa_mp3');
			$table->text('faixa_ogg');
			$table->integer('disco_id')->unsigned()->nullable();
		});
     Schema::table('musicas', function($table) {
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
		Schema::dropIfExists('musicas');
	}

}