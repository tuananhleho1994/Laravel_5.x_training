<?php
/**
 * Created by PhpStorm.
 * User: tuananhleho1994
 * Date: 7/21/2015
 * Time: 4:36 PM
 */

namespace App\Repository;

class DemoService{
    public function myHead(){
        return "Hello World . Class DemoService, action myHead";
    }

    public static function myBody(){
        return "Hello World . Class DemoService, action myBody";
    }
}