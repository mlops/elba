<?php

class Tipos extends Eloquent {

    protected $table = 'tipo';
    protected $fillable = ['tipo'];
    public $timestamps = false;

     // public function Par_Tipo() {

     //     return $this->hasMany('Participacoes', 'participacao_tipo' );

     // }

}