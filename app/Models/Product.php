<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $fillable =[
        'product_name', 'image', 'price',
    ];


    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
