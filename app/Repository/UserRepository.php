<?php
/**
 * Created by PhpStorm.
 * User: tuananhleho1994
 * Date: 7/15/2015
 * Time: 11:11 PM
 */
namespace App\Repository;

interface UserRepository
{

    public function myName();
    public function myAge($age);
}