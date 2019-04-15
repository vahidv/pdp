<?php
/**
 * Created by PhpStorm.
 * User: genom
 * Date: 4/15/19
 * Time: 3:26 PM
 */

namespace src\singleton;


use src\BaseController;

class SingletonController extends BaseController
{

    public function index()
    {
        $president1 = President::getInstance();
        $president2 = President::getInstance();

        var_dump($president1 === $president2); // true
    }
}