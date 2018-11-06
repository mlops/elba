<?php

class AddAlbuns extends Seeder {



	public function run()
	{
				 DB::table('albuns')->delete(); // deleting old records.

	
			Album::create(

			                    array(
			                        'album' => 'Revistas',
			                        'img_destaque' => 'revistas-min.jpg' 
			                    )
			                );
			// Album::create(
				
			//                     array(
			//                         'album' => 'Tour',
			//                         'img_destaque' => ''
			//                     )
			//                 );







	}

}