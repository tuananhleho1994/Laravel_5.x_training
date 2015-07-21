<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $primaryKey = 'product_id';

    protected $table = "products";

    protected $fillable = ['user_id','product_code','product_name','product_quantity','product_price'];

    protected $dates = ['deleted_at'];

    protected $hidden = ['product_code'];

    protected $visible = ['product_name'];


    public $timestamps = false;
}
