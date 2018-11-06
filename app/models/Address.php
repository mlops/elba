<?php

class Address extends Eloquent {
    protected $table = 'address';
    protected $fillable = array('user_id', 'country');
    public $timestamps = false;

    
}