<?php
/**
 * Created by PhpStorm.
 * User: vahid
 * Date: 7/22/18
 * Time: 11:53 AM
 */

namespace src\structural\adapter\Dog;


use src\structural\adapter\Lion\LionInterface;

class DogAdapter implements LionInterface
{
    protected $dog;

    public function __construct(DogInterface $dog)
    {
        $this->dog = $dog;
    }

    public function roar()
    {
        return $this->dog->bark();
    }
}