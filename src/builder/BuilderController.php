<?php
/**
 * Created by PhpStorm.
 * User: genom
 * Date: 4/15/19
 * Time: 2:49 PM
 */

namespace src\builder;


use src\BaseController;

class BuilderController extends BaseController
{

    public function index()
    {
        $burger = (new BurgerBuilder(14))
            ->addCheese()
            ->addPepperoni()
            ->addLettuce()
            ->addTomato()
            ->build();

        var_dump($burger);
    }
}