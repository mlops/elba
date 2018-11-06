<?php


class AddDvdsImg extends Seeder {

	public function run()
	{
        DB::table('dvdimgs')->delete(); // deleting old records.

        DvdsImagens::create( [
        'dvds_id' =>'1',
        'dvdimg' =>'GEcontracapa.jpg',
        'dvd_sm' => 'GEcontracapa-sm.jpg'
        ] );
        DvdsImagens::create( [
        'dvds_id' =>'1',
        'dvdimg' =>'GEencarte1.jpg',
        'dvd_sm' => 'GEencarte1-sm.jpg'
        ] );
        DvdsImagens::create( [
        'dvds_id' =>'1',
        'dvdimg' =>'GEencarte2.jpg',
        'dvd_sm' => 'GEencarte2-sm.jpg'
        ] );
        DvdsImagens::create( [
        'dvds_id' =>'1',
        'dvdimg' =>'GEselo.jpg',
        'dvd_sm' => 'GEselo-sm.jpg'
        ] );

        DvdsImagens::create( [
        'dvds_id' =>'2',
        'dvdimg' =>'AVcontracapa.jpg',
        'dvd_sm' => 'AVcontracapa-sm.jpg'
        ] );

        DvdsImagens::create( [
        'dvds_id' =>'2',
        'dvdimg' =>'AVencarte1.jpg',
        'dvd_sm' => 'AVencarte1-sm.jpg'
        ] );

        DvdsImagens::create( [
        'dvds_id' =>'2',
        'dvdimg' =>'AVencarte2.jpg',
        'dvd_sm' => 'AVencarte2-sm.jpg'
        ] );
        
        DvdsImagens::create( [
        'dvds_id' =>'2',
        'dvdimg' =>'AVselo.jpg',
        'dvd_sm' => 'AVselo-sm.jpg'
        ] );

        DvdsImagens::create( [
        'dvds_id' =>'3',
        'dvdimg' =>'RAcontracapa.jpg',
        'dvd_sm' => 'RAcontracapa-sm.jpg'
        ] );
        DvdsImagens::create( [
        'dvds_id' =>'3',
        'dvdimg' =>'RAencarte1.jpg',
        'dvd_sm' => 'RAencarte1-sm.jpg'
        ] );
        DvdsImagens::create( [
        'dvds_id' =>'3',
        'dvdimg' =>'RAencarte2.jpg',
        'dvd_sm' => 'RAencarte2-sm.jpg'
        ] );
        DvdsImagens::create( [
        'dvds_id' =>'3',
        'dvdimg' =>'RAencarte3.jpg',
        'dvd_sm' => 'RAencarte3-sm.jpg'
        ] );
        DvdsImagens::create( [
        'dvds_id' =>'3',
        'dvdimg' =>'RAencarte4.jpg',
        'dvd_sm' => 'RAencarte4-sm.jpg'
        ] );
        DvdsImagens::create( [
        'dvds_id' =>'3',
        'dvdimg' =>'RAselo.jpg',
        'dvd_sm' => 'RAselo-sm.jpg'
        ] );

        DvdsImagens::create( [
        'dvds_id' =>'4',
        'dvdimg' =>'MZcontracapa.jpg',
        'dvd_sm' => 'MZcontracapa-sm.jpg'
        ] );
        DvdsImagens::create( [
        'dvds_id' =>'4',
        'dvdimg' =>'MZencarte1.jpg',
        'dvd_sm' => 'MZencarte1-sm.jpg'
        ] );
        DvdsImagens::create( [
        'dvds_id' =>'4',
        'dvdimg' =>'MZencarte2.jpg',
        'dvd_sm' => 'MZencarte2-sm.jpg'
        ] );
        DvdsImagens::create( [
        'dvds_id' =>'4',
        'dvdimg' =>'MZencarte3.jpg',
        'dvd_sm' => 'MZencarte3-sm.jpg'
        ] );
        DvdsImagens::create( [
        'dvds_id' =>'4',
        'dvdimg' =>'MZselo.jpg',
        'dvd_sm' =>'MZselo-sm.jpg'
        ] );

        DvdsImagens::create( [
        'dvds_id' =>'5',
        'dvdimg' =>'SJCcontracapa.jpg',
        'dvd_sm' => 'SJCcontracapa-sm.jpg'
        ] );
        DvdsImagens::create( [
        'dvds_id' =>'5',
        'dvdimg' =>'SJCencarte.jpg',
        'dvd_sm' => 'SJCencarte-sm.jpg'
        ] );
        DvdsImagens::create( [
        'dvds_id' =>'5',
        'dvdimg' =>'SJCselo.jpg',
        'dvd_sm' => 'SJCselo-sm.jpg'
        ] );

        DvdsImagens::create( [
        'dvds_id' =>'6',
        'dvdimg' =>'dvd-contracapa2.jpg',
        'dvd_sm' => 'dvd-contracapa2-sm.jpg'
        ] );
        DvdsImagens::create( [
        'dvds_id' =>'6',
        'dvdimg' =>'dvd-encarte1-2015.jpg',
        'dvd_sm' => 'dvd-encarte1-2015-sm.jpg'
        ] );
        DvdsImagens::create( [
        'dvds_id' =>'6',
        'dvdimg' =>'dvd-encarte3-2015.jpg',
        'dvd_sm' => 'dvd-encarte3-2015-sm.jpg'
        ] );
        DvdsImagens::create( [
        'dvds_id' =>'6',
        'dvdimg' =>'dvd-encarte4-2015.jpg',
        'dvd_sm' => 'dvd-encarte4-2015-sm.jpg'
        ] );
        DvdsImagens::create( [
        'dvds_id' =>'6',
        'dvdimg' =>'dvd-encarte5-2015.jpg',
        'dvd_sm' => 'dvd-encarte5-2015-sm.jpg'
        ] );
        DvdsImagens::create( [
        'dvds_id' =>'6',
        'dvdimg' =>'dvd-rotulo1-2015.jpg',
        'dvd_sm' => 'dvd-rotulo1-2015-sm.jpg'
        ] );
        DvdsImagens::create( [
        'dvds_id' =>'7',
        'dvdimg' =>'dvd-capaGE.jpg',
        'dvd_sm' => 'dvd-capaGE-sm.jpg'
        ] );
        DvdsImagens::create( [
        'dvds_id' =>'7',
        'dvdimg' =>'dvd-capaGE-contacapa.jpg',
        'dvd_sm' => 'dvd-capaGE-contacapa-sm.jpg'
        ] );
        DvdsImagens::create( [
        'dvds_id' =>'7',
        'dvdimg' =>'dvd-capaGE-encarte1.jpg',
        'dvd_sm' => 'dvd-capaGE-encarte1-sm.jpg'
        ] );
        DvdsImagens::create( [
        'dvds_id' =>'7',
        'dvdimg' =>'dvd-capaGE-encarte2.jpg',
        'dvd_sm' => 'dvd-capaGE-encarte2-sm.jpg'
        ] );
        DvdsImagens::create( [
        'dvds_id' =>'7',
        'dvdimg' =>'dvd-capaGE-encarte3.jpg',
        'dvd_sm' => 'dvd-capaGE-encarte3-sm.jpg'
        ] );
        DvdsImagens::create( [
        'dvds_id' =>'7',
        'dvdimg' =>'dvd-capaGE-encarte4.jpg',
        'dvd_sm' => 'dvd-capaGE-encarte4-sm.jpg'
        ] );
        DvdsImagens::create( [
        'dvds_id' =>'7',
        'dvdimg' =>'dvd-capaGE-encarte5.jpg',
        'dvd_sm' => 'dvd-capaGE-encarte5-sm.jpg'
        ] );
        DvdsImagens::create( [
        'dvds_id' =>'7',
        'dvdimg' =>'dvd-capaGE-encarte6.jpg',
        'dvd_sm' => 'dvd-capaGE-encarte6-sm.jpg'
        ] );
        DvdsImagens::create( [
        'dvds_id' =>'7',
        'dvdimg' =>'dvd-capaGE-encarte7.jpg',
        'dvd_sm' => 'dvd-capaGE-encarte7-sm.jpg'
        ] );
        DvdsImagens::create( [
        'dvds_id' =>'7',
        'dvdimg' =>'dvd-capaGE-encarte8.jpg',
        'dvd_sm' => 'dvd-capaGE-encarte8-sm.jpg'
        ] );
        DvdsImagens::create( [
        'dvds_id' =>'7',
        'dvdimg' =>'dvd-capaGE-encarte9.jpg',
        'dvd_sm' => 'dvd-capaGE-encarte9-sm.jpg'
        ] );
        DvdsImagens::create( [
        'dvds_id' =>'7',
        'dvdimg' =>'dvd-capaGE-encarte10.jpg',
        'dvd_sm' => 'dvd-capaGE-encarte10-sm.jpg'
        ] );
        DvdsImagens::create( [
        'dvds_id' =>'7',
        'dvdimg' =>'dvd-capaGE-encarte11.jpg',
        'dvd_sm' => 'dvd-capaGE-encarte11-sm.jpg'
        ] );
        DvdsImagens::create( [
        'dvds_id' =>'7',
        'dvdimg' =>'dvd-capaGE-encarte12.jpg',
        'dvd_sm' => 'dvd-capaGE-encarte12-sm.jpg'
        ] );
        DvdsImagens::create( [
        'dvds_id' =>'7',
        'dvdimg' =>'dvd-capaGE-encarte13.jpg',
        'dvd_sm' => 'dvd-capaGE-encarte13-sm.jpg'
        ] );
        DvdsImagens::create( [
        'dvds_id' =>'7',
        'dvdimg' =>'dvd-capaGE-selo.jpg',
        'dvd_sm' => 'dvd-capaGE-selo-sm.jpg'
        ] );


	}

}