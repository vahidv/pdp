<?php
/**
 * Created by PhpStorm.
 * User: genom
 * Date: 4/15/19
 * Time: 1:29 PM
 */

namespace src\abstractFactory;


use src\BaseController;

class AbstractFactoryController extends BaseController
{

    public function index()
    {

        $woodenTable = WoodenFactory::makeTable(100, 10, 20);
        var_dump($woodenTable);

        echo '<br />';

        $ironTable = IronFactory::makeTable(100, 10, 20);
        var_dump($ironTable);

    }
}