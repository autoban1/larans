<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cartag extends Model
{
    protected $fillable = [
        'name',
        'description',
        'slug'
    ] ;
}
