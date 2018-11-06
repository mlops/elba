<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		 //$this->call('UserTableSeeder');
		 $this->call('AddUsers');
		 	$this->command->info("Users");
		 $this->call('AddAnos');
		 $this->command->info("Anos");

		 $this->call('AddDiscos');
		 	$this->command->info("Discos");
		 $this->call('AddMusicas');
		 	$this->command->info("Musicas");
		 $this->call('AddExtras');
		 	$this->command->info("Extras Discos");
		 $this->call('AddTipo');
		 	$this->command->info("Tipo");
		 $this->call('AddParticipacoes');
		 	$this->command->info("Participacoes");
		 $this->call('AddParticipacoesExtas');
		 	$this->command->info("ParticipacoesExtas");
		 
		 $this->call('AddNews');
		 	$this->command->info("News");

		 $this->call('AddSingle');
		 	$this->command->info("Single");
		 $this->call('AddDvds');
		 	$this->command->info("Dvds");
		 $this->call('AddAgenda');
		 	$this->command->info("Agenda");
		 $this->call('AddInstagram');
		 	$this->command->info("Instagram");
		 $this->call('AddDvdsImg');
		 	$this->command->info("Dvds Extas");
		 $this->call('AddK7');
		 	$this->command->info("K7");
		 $this->call('AddVideos');
		 	$this->command->info("Videos");

		 $this->call('AddAlbuns');
		 	$this->command->info("Albuns");
		 	$this->call('AddAlbunsImages');
		 	$this->command->info("ImagesAlbuns");

	}

}