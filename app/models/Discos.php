<?php

class Discos extends Eloquent {

    protected $table = 'discos';

    protected $fillable = array('nome_disco', 'ano','release', 'sbr_disco','fx-tecnica', 'slug', 'foto_fundo', 'capa_disco');

    public $timestamps = false;

    //protected $softDelete = true;


    // cada disco tem muitas musicas para tocar

    public function Musica() {

        return $this->hasMany('Musicas', 'disco_id'); //Musicas Model
    }

    public function Extra() {

        return $this->hasMany('Extras', 'disco_id'); //Musicas Model
    }
    public function k7() {

        return $this->hasMany('K7', 'disco_id'); //K7 Model
    }
    


    


}