<?php

class Agenda extends Eloquent {
    protected $table = 'agenda';
    protected $fillable = ['startdate','local', 'evento', 'fb' ];
    public $timestamps = true;


}