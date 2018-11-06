<?php

class Posts extends Eloquent {

    protected $table = 'posts';

    protected $fillable = array('title', 'content', 'id_author');

    public $timestamps = true;

    public function Author() {

        return $this->belongsTo('User', 'id_author');
    }

    public function getCreatedAtAttribute($value) {
      setlocale(LC_TIME, 'pt_BR.utf-8');
      $year   = date('Y', strtotime($value));
      $month  = date('m', strtotime($value));
      $day    = date('d', strtotime($value));
      $hour   = date('H', strtotime($value));
      $minute = date('i', strtotime($value));
      $second = date('s', strtotime($value));
      $dt = Carbon::create($year, $month, $day, $hour, $minute, $second);
      return $dt->formatLocalized('%A, %d de %B de %Y - %H:%M:%S');
    }
}