<?php
/**
 * Created by PhpStorm.
 * User: vahid
 * Date: 7/22/18
 * Time: 1:19 PM
 */

namespace src\structural\decorator;

class SimpleCoffee implements CoffeeInterface
{

    public function getCost()
    {
        return 10;
    }

    public function getDescription()
    {
        return 'a simple cup of coffee';
    }
}