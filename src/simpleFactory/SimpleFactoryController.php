<?php
/**
 * Created by PhpStorm.
 * User: genom
 * Date: 4/15/19
 * Time: 11:30 AM
 */

namespace src\simpleFactory;


use src\BaseController;

class SimpleFactoryController extends BaseController
{

    public function index()
    {
        echo 'simple factory';

        $woodenTable = TableFactory::makeTable(100, 20, 2);

        var_dump($woodenTable);
    }
}