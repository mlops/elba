<?php

class Musicas extends Eloquent {



    protected $table = 'musicas';

    protected $fillable = array('faixa', 'compositor', 'letra', 'creditos', 'faixa_mp3', 'faixa_ogg', 'disco_id');

    public $timestamps = false;
    // protected $softDelete = true;

    public function Disco() {

        return $this->belongsTo('Discos'); //Disco Pertencem a Discos

    }



}

