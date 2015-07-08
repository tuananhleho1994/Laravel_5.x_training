<?php
/**
 * Created by PhpStorm.
 * User: tuananhleho1994
 * Date: 7/7/2015
 * Time: 6:13 PM
 */
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;

class NewController extends Controller
{
    public function show($newId, $commentId){
        echo "<h2>This is controller New, action Show, parameter: $newId, $commentId</h2>";
    }
}