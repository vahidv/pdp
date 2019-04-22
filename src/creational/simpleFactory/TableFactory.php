<?php
/**
 * Created by PhpStorm.
 * User: genom
 * Date: 4/15/19
 * Time: 12:16 PM
 */

namespace src\creational\simpleFactory;


class TableFactory
{

    static public function makeTable(int $height, int $weight, int $area): TableInterface
    {
        return new WoodenTable($height,$weight,$area);
    }

}