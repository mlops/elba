<?php
//namespace App\Models;
//use Eloquent;
class News extends Eloquent {


   protected $table = 'news';

   protected $fillable = array('author_id','slugs', 'title', 'article', 'img', 'fonte');

   public $timestamps = true;



   public function Author() {

       return $this->belongsTo('User', 'author_id');
   }

   public function NewsImages() {

       return $this->hasMany('NewsImages');
   }


   // public function getSlugsAttribute($value){
   //     return ucwords strtolower
   // }

   public function getTitleAttribute($value){
       return ucwords($value);
   }
   public function getFonteAttribute($value){
       return ucwords($value);
   }

   public function getCreatedAtAttribute($date){
        return Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('d-m-Y');
       }
  public function getUpdatedAtAttribute($date)
  {
      return Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('Y-m-d');
  }

}

