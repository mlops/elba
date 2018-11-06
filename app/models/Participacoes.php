<?php

class Participacoes extends Eloquent {
    protected $table = 'participacoes';
    protected $fillable = ['tipo_id','nome_disco','capa_participacao','capa_sm','ano_id'];
    public $timestamps = false;


    public function Anos() {

        return $this->belongsTo('Anos'); //Disco Pertencem a Discos

    }

    public function Tipo() {

        return $this->belongsTo('Tipos');

    }

    public function ParticipacoesExtras() {

        return $this->hasMany('ParticipacoesExtras'); //Musicas Model
    }

    // public function Anos() {

    //     return $this->belongsTo('Anos');

    // }
    // public function Participacoes_extras() {

    //     return $this->hasMany('Participacoes_extra', 'participacoes_id' ); //Disco Pertencem a Discos

    // }
    // public function Extra() {

    //     return $this->ManyToMany('Participacoes_extra', 'participacoes_id');

    // }

}
