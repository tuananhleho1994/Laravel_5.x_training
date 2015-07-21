<?php
/**
 * Created by PhpStorm.
 * User: tuananhleho1994
 * Date: 7/21/2015
 * Time: 2:50 PM
 */

namespace App\Http\Controllers\Service;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repository\UserInterface;

class ServiceController extends Controller
{
    public function getOne(UserInterface $user){
        echo $user -> myName();
    }

//    use App\Repository\Demo;
//    public function getTwo(Demo $demo){
//        echo Demo::myHand();
//        echo $demo -> myFoot();
//    }

    public function getThree(){
        $demo = new \App\Repository\Demo;
        echo $demo -> myFoot();
    }

    public function getFour(){
        $demo = new \App\Repository\Demo;
        echo $demo -> myHand();
    }
}