<?php
/**
 * Created by PhpStorm.
 * User: tuananhleho1994
 * Date: 7/19/2015
 * Time: 5:03 PM
 */
namespace App\Http\Controllers\Eloquent;

use Carbon\Carbon;
use DB;
use App\Models\Product;
use App\User;
use App\Http\Controllers\Controller;

class SerializationController extends Controller
{
    public function getOne(){
        $product = Product::find(1);
        $arrayProduct = $product->toArray();
        $this->getPrint($arrayProduct);
    }

    public function getTwo(){
        $product = Product::find(1);
        $jsonProduct = $product->toJson();
        echo $jsonProduct;
    }

    public function getThree(){
        $product = Product::where('user_id',1)->first();
        return (string) $product; // call toJson() method...
    }

    public function getPrint($array){
        echo "<pre>";
        print_r($array);
        echo "</pre>";
    }
}