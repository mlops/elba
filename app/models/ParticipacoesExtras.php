<?php

class ParticipacoesExtras extends Eloquent {
    protected $table = 'participacoes_extras';
    protected $fillable = array('ano_id','participacoes_id','faixa_titulo', 'compositor', 'letra','faixa_mp3');
    public $timestamps = false;


    public function Participacoes() {

        return $this->belongsTo('Participacoes'); //Disco Pertencem a Discos

        }


}