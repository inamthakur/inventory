<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    //
    protected $fillable = [
    'product_title','product_slug','product_price','product_description','product_image'
    ];
}
