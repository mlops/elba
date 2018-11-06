<?php

class AlbunsImages extends Eloquent {
	protected $table = 'albuns_images';
    public $timestamps = true;
	protected $fillable = [ 'albuns_id', 'imgs_album'];



     public function Albuns() {

        return $this->belongsTo('Album'); //Disco Pertencem a Discos

        }
}