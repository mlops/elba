<?php

class Extras extends Eloquent {

    protected $table = 'extras';
    public $timestamps = false;
	// protected $fillable = ['extras'];
    protected $fillable = array('extras', 'extras_s');

    public function Disco() {

        return $this->belongsTo('Discos'); //Disco Pertencem a Discos

        }

}
