<?php
/**
 * Created by PhpStorm.
 * User: genom
 * Date: 4/15/19
 * Time: 1:44 PM
 */

namespace src\creational\abstractFactory;


class IronFactory implements TableFactoryInterface
{

    static public function makeTable(int $height, int $weight, int $area): TableInterface
    {
        return new IronTable($height,$weight,$area);
    }

    static function makeFittingExpert(): TableFittingExpert
    {
        return new Welder();
    }

}