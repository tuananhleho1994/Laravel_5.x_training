<?php
/**
 * Created by PhpStorm.
 * User: tuananhleho1994
 * Date: 7/21/2015
 * Time: 8:52 PM
 */
namespace App\Facade;
use Illuminate\Support\Facades\Facade;

class DemoService extends Facade
{
    protected static function getFacadeAccessor() { return 'DemoServiceHello'; }
}