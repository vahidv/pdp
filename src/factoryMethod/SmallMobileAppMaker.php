<?php
/**
 * Created by PhpStorm.
 * User: genom
 * Date: 4/15/19
 * Time: 12:56 PM
 */

namespace src\factoryMethod;


class SmallMobileAppMaker extends MobileDevelopment
{

    public function makeDeveloper(): MobileDeveloperInterface
    {
        return new HybridDeveloper();
    }
}