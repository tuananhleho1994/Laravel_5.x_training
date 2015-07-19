<?php
/**
 * Created by PhpStorm.
 * User: tuananhleho1994
 * Date: 7/16/2015
 * Time: 9:58 AM
 */
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CollectionController extends Controller
{
    public function getOne(){
        $collection = collect(['taylor', 'abigail', null])->map(function ($name) {
            return strtoupper($name);
        })
            ->reject(function ($name) {
                return empty($name);
            });

        $this->show($collection);
    }

    public function getTwo(){
        $collection = collect(array(1,4,3));

        echo $collection[1];
        $this->show($collection->all());
        $this->show($collection);
    }

    public function show($array){
        echo "<hr>";
        echo "<pre>";
        print_r($array);
        echo "</pre>";
    }
}