<?php
/**
 * Created by PhpStorm.
 * User: genom
 * Date: 4/15/19
 * Time: 12:16 PM
 */

namespace src\creational\abstractFactory;


class WoodenFactory implements TableFactoryInterface
{

    static public function makeTable(int $height, int $weight, int $area): TableInterface
    {
        return new WoodenTable($height,$weight,$area);
    }

    static function makeFittingExpert(): TableFittingExpert
    {
        return new Carpenter();
    }

}