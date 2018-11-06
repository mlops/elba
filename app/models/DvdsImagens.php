<?php

class DvdsImagens extends Eloquent {
    protected $table = 'dvdimgs';
	protected $fillable = ['dvds_id', 'dvdimg', 'facydvd'];
    public $timestamps = false;


    // public function Dvds() {

    //     return $this->belongsTo('Dvds');

    // }

}
