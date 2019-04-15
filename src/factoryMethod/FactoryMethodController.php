<?php
/**
 * Created by PhpStorm.
 * User: genom
 * Date: 4/15/19
 * Time: 12:27 PM
 */

namespace src\factoryMethod;


use src\BaseController;

class FactoryMethodController extends BaseController
{

    public function index()
    {
//        $smallAppMaker = new SmallMobileAppMaker();
        $smallAppMaker = new BigMobileAppMaker();
        echo $smallAppMaker->getDeveloper();
    }
}