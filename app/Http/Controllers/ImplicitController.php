<?php
/**
 * Created by PhpStorm.
 * User: tuananhleho1994
 * Date: 7/7/2015
 * Time: 10:55 PM
 */

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;

class ImplicitController extends Controller
{
    /**
     * Responds to requests to GET /users
     */
    public function getIndex()
    {
        echo "This is controller Implicit, action index";
    }

    /**
     * Responds to requests to GET /users/show/1
     */
    public function getShow($id)
    {
        echo "This is controller Implicit, action show, param $id";
    }

    /**
     * Responds to requests to GET /users/admin-profile
     */
    public function getAdminProfile()
    {
        echo "This is controller Implicit, action admin-profile";
    }

    /**
     * Responds to requests to POST /users/profile
     */
    public function postProfile()
    {
        echo "This is controller Implicit, action profile";
    }
}