<?php
/**
 * Created by PhpStorm.
 * User: tuananhleho1994
 * Date: 7/27/2015
 * Time: 11:45 PM
 */
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use GuzzleHttp;
use Cookie;

class CookieController extends Controller
{
    public function getCreate()
    {
        Cookie::queue(Cookie::make('age', 21, 3));
    }

    public function getShow()
    {
        if(!Cookie::has('age')){
            echo "No Cookie";
        }else{
            echo Cookie::get('age');
        }
        echo Cookie::get('name');
    }

    public function getDelete(){
        $cookie = Cookie::forget('age');
        return redirect()->action('CookieController@getShow')->withCookie($cookie);
    }
}

