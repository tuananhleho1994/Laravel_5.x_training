<?php
/**
 * Created by PhpStorm.
 * User: tuananhleho1994
 * Date: 7/15/2015
 * Time: 11:22 PM
 */
namespace App\Http\Controllers;

use App\Repository\UserRepository as UserRepository;
use App\Http\Controllers\Controller;
use GuzzleHttp\Message\Request;
use Illuminate\Http\Response;

class ServiceController extends Controller
{

    protected $user;

    public function __contruct(UserRepository $user)
    {
        $this->user = $user;
    }

    public function getName()
    {
        echo $this->user->myName();
    }
}