<?php

class Instagram extends Eloquent {
    protected $table = 'instagram';
	protected $fillable = ['insfoto', 'inslink'];
    public $timestamps = true;
}   