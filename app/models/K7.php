<?php

class K7 extends Eloquent {
    protected $table = 'k7';
	protected $fillable = ['ano_id', 'k7', 'disco_id'];
    public $timestamps = false;

    public function Disco() {

        return $this->belongsTo('Discos'); //Disco Pertencem a Discos

    }
    
}
