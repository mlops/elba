<?php

class Anos extends Eloquent {
    protected $table = 'anos';
    protected $fillable = ['ano'];
    public $timestamps = false;


    public function Participacoes() {

        return $this->hasMany('Participacoes');

    }

    public function Single() {

        return $this->hasMany('Single','single_id');

    }

    public function Discos() {

        return $this->hasMany('Discos','disco_id');

    }
    public function Videos() {

        return $this->hasMany('Videos','video_id');

    }

}

