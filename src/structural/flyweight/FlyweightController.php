<?php
/**
 * Created by PhpStorm.
 * User: genom
 * Date: 4/17/19
 * Time: 12:28 PM
 */

namespace src\structural\flyweight;


use src\BaseController;

class FlyweightController extends BaseController
{

    public function index()
    {
        $teaMaker = new TeaMaker();
        $shop = new TeaShop($teaMaker);

        $shop->takeOrder('less sugar', 1);
        $shop->takeOrder('more milk', 2);
        $shop->takeOrder('without sugar', 5);

        $shop->serve();
    }

    public function getDescription()
    {
        // TODO: Implement getDescription() method.
    }
}