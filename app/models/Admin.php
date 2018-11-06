<?php


class Admin extends \Eloquent {
    protected $table = 'admin';
	protected $fillable = ['username', 'password'];
    public $timestamps = false;
}