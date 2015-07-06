<?php
/**
 * Created by PhpStorm.
 * User: tuananhleho1994
 * Date: 7/7/2015
 * Time: 1:11 AM
 */
namespace App\Http\Controllers\Customer;

use App\User;
use App\Http\Controllers\Controller;

class CustomController extends Controller
{
    public function index($id, $countId){
        echo "<h2>This is controller Customer/CustomControler, action index, id : $id, $countId</h2>";
    }
}