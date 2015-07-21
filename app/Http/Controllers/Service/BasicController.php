<?php
/**
 * Created by PhpStorm.
 * User: tuananhleho1994
 * Date: 7/21/2015
 * Time: 3:36 PM
 */

namespace App\Http\Controllers\Service;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App;
use DemoService;

class BasicController extends Controller
{
    public function getDemo(){
//        App::register('App\Providers\BasicServiceProvider');
        $demo = App::make('Demo');
        echo $demo -> myFoot();
    }

    public function getUseOtherService(){
        $useOtherService = App::make('UseDemo');
        echo $useOtherService -> myFoot();
    }

    public function getFacadeService(){
        echo DemoService::myBody();
    }
}