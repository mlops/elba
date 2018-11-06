<?php

class NewsImages extends Eloquent {
    protected $table = 'news_images';
    public $timestamps = true;
	protected $fillable = [ 'title', 'images'];

    public function News() {

        return $this->belongsTo('News');
    }
}
