<?php
/**
 * Created by PhpStorm.
 * User: tuananhleho1994
 * Date: 7/9/2015
 * Time: 3:26 AM
 */
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BladeController extends Controller{
    public function getChild(){
        return view('blade.child',['name' => 'Do Tuan Anh']);
    }

    public function getDemo(){
        $listUser['users'] = array(
            array('name' => 'Name 1'),
            array('name' => 'Name 2'),
            array('name' => 'Name 3'),
            array('name' => 'Name 4'),
        );
        return view('blade.demo', $listUser)->with('name',"Do Tuan Anh<script>alert('hello')</script>");
    }
}