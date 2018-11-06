<?php

class Album extends Eloquent {
	protected $table = 'albuns';
    public $timestamps = true;
	protected $fillable = [ 'albuns'];

    // public function Images() {

    //     return $this->hasMany('AlbunsImages', 'albuns_id');
    // }

      public function Images() {

        return $this->hasMany('AlbunsImages', 'albuns_id');
    }
}
    