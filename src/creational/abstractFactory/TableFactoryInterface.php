<?php
/**
 * Created by PhpStorm.
 * User: genom
 * Date: 4/15/19
 * Time: 1:39 PM
 */

namespace src\creational\abstractFactory;


interface TableFactoryInterface
{

    static public function makeTable(int $height, int $weight, int $area): TableInterface;
    
    static public function makeFittingExpert(): TableFittingExpert;

}