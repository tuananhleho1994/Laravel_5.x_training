<?php
/**
 * Created by PhpStorm.
 * User: tuananhleho1994
 * Date: 7/15/2015
 * Time: 11:12 PM
 */

namespace App\Repository\Database;

use App\Repository\UserRepository;

class User implements UserRepository
{

    public function myName()
    {
        return "This is function myName in Repository/Database";
    }

    public function myAge($age)
    {
        return "This is function myAge, param: $age in Repository/Database";
    }
}