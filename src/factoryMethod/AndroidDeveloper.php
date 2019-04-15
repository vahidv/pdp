<?php
/**
 * Created by PhpStorm.
 * User: genom
 * Date: 4/15/19
 * Time: 12:43 PM
 */

namespace src\factoryMethod;


class AndroidDeveloper implements MobileDeveloperInterface
{

    public function developMobileApp()
    {
        echo 'implement mobile app with android java';
    }
}