<?php
/**
 * Created by PhpStorm.
 * User: vahid
 * Date: 7/22/18
 * Time: 11:51 AM
 */

namespace src\adapter\Dog;


class WildDog implements DogInterface
{

    public function bark()
    {
        echo 'bark func';
    }
}