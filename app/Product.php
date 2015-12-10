<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = ['product_name', 'type_id', 'brand_id', 
    'price', 'sale_price', 'quantity', 'image1', 'image2', 'image3', 'thumbnail1', 'thumbnail2'
    , 'thumbnail3', 'product_info', 'short_description', 'description'];
}
