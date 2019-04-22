<?php
/**
 * Created by PhpStorm.
 * User: genom
 * Date: 4/15/19
 * Time: 12:42 PM
 */

namespace src\creational\factoryMethod;


class HybridDeveloper implements MobileDeveloperInterface
{

    public function developMobileApp()
    {
        echo 'implement mobile app with react native';
    }
}