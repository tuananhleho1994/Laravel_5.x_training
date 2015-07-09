<?php
/**
 * Created by PhpStorm.
 * User: tuananhleho1994
 * Date: 7/9/2015
 * Time: 2:04 AM
 */
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ViewController extends Controller {
    public function getFirst(){
        if(view()->exists('view.first')){
            echo "<h1>view.first is exists</h1>";
        }
        return view('view.first',['name'=>'Do Tuan Anh']);
    }

    public function getSecond(){
        return view('view.first')->with('name',"Do Tuan Anh<script>alert('hello')</script>");
    }


}