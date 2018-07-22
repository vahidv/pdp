<?php
/**
 * Created by PhpStorm.
 * User: vahid
 * Date: 7/22/18
 * Time: 11:36 AM
 */

namespace src\adapter\Lion;

use src\adapter\Lion\LionInterface;

class AfricanLion implements LionInterface
{
    public function roar()
    {
        echo 'roar func';
    }
}