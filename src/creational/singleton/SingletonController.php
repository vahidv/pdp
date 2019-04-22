<?php
/**
 * Created by PhpStorm.
 * User: genom
 * Date: 4/15/19
 * Time: 3:26 PM
 */

namespace src\creational\singleton;


use src\BaseController;

class SingletonController extends BaseController
{

    public function index()
    {
        $president1 = President::getInstance();
        $president2 = President::getInstance();

        return$president1 === $president2; // true
    }

    public function getDescription()
    {
        // TODO: Implement getDescription() method.
    }
}