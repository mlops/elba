<?php

class Single extends Eloquent {
    protected $table = 'singles';
	protected $fillable = ['ano_single', 'single', 'single_bg', 'single_sm', 'single_tx'];
    public $timestamps = false;
    
}