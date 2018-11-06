<?php

class Sidebar extends \Eloquent {
    
    protected $table = 'sidebar';
	protected $fillable = ['body'];
    public $timestamps = false;
}
