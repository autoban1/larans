<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'model',
        'brand',
        'year',
        'price1h',
        'price1hcost',
        'owner_user_id',
        'long_description'
    ] ;


   public function categories(){

       return $this->belongsToMany('App\Category')->withTimestamps();
   }



}
