<?php

class Videos extends Eloquent {
    protected $table = 'videos';
    protected $fillable = ['video', 'path', 'embed', 'ano', 'dvds_id'];
    public $timestamps = false;


    public function Anos() {

        return $this->belongsTo('Anos'); //Disco Pertencem a Discos

    }

    public function Dvds() {

        return $this->belongsTo('Dvds'); //Disco Pertencem a Discos

    }

}