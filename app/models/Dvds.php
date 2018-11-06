<?php

class Dvds extends Eloquent {
    protected $table = 'dvds';
	protected $fillable = ['dvd', 'ano', 'fx_tecnica', 'dvd_capa'];
    public $timestamps = false;

    // public function Disco() {

    //     return $this->belongsTo('Discos', 'disco_id'); //Musicas Model
    // }

    public function DvdsExtras() {

        return $this->hasMany('DvdsImagens', 'dvds_id'); //Musicas Model
    }
    public function Anos() {

        return $this->belongsTo('Anos'); //Disco Pertencem a Discos

    }
    public function Videos() {

        return $this->hasMany('Videos', 'dvds_id'); //dvds Pertencem a Discos

    }
   

}