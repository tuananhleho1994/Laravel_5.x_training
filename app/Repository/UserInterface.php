<?php
/**
 * Created by PhpStorm.
 * User: tuananhleho1994
 * Date: 7/21/2015
 * Time: 2:54 PM
 */
namespace App\Repository;

interface UserInterface
{

    public function myName();
    public function myAge($age);
}