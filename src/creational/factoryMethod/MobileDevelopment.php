<?php
/**
 * Created by PhpStorm.
 * User: genom
 * Date: 4/15/19
 * Time: 12:51 PM
 */

namespace src\creational\factoryMethod;


abstract class MobileDevelopment
{

    abstract public function makeDeveloper(): MobileDeveloperInterface;

    public function getDeveloper()
    {
        $developer = $this->makeDeveloper();
        return $developer->developMobileApp();
    }
    
}