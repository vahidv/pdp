<?php
/**
 * Created by PhpStorm.
 * User: genom
 * Date: 4/15/19
 * Time: 1:35 PM
 */

namespace src\creational\abstractFactory;


class Carpenter implements TableFittingExpert
{

    public function getDescription()
    {
        echo 'can fix wooden table only';
    }
}