<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $primaryKey = 'product_id';

    protected $table = "products";

    protected $fillable = ['user_id','product_code','product_name','product_quantity','product_price'];

    public $timestamps = false;
}
