<?php
/**
 * Created by PhpStorm.
 * User: tuananhleho1994
 * Date: 7/7/2015
 * Time: 12:41 AM
 */
namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

        $this->middleware('log', ['only' => ['fooAction', 'barAction']]);

        $this->middleware('subscribed', ['except' => ['fooAction', 'barAction']]);
    }
    public function showProfile()
    {
        echo "<h2>Hello guy. This is controller User, action show</h2>";
    }

    public function someParam($name, $age)
    {
        echo "<h2>My name is $name, age is $age</h2>";
        echo "<h2>Hello guy. This is controller User, action someParam</h2>";
    }
}