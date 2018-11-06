<?php

class AddTipo extends Seeder {

	public function run()
	{
        DB::table('tipo')->delete(); // deleting old records.

        Tipos::create( [
        'tipo' =>'Disco',
        ] );
        Tipos::create( [
        'tipo' =>'Dvd',
        ] );
	}

}