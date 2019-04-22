<?php
/**
 * Created by PhpStorm.
 * User: genom
 * Date: 4/15/19
 * Time: 1:36 PM
 */

namespace src\creational\abstractFactory;


class Welder implements TableFittingExpert
{

    public function getDescription()
    {
        echo 'can fix iron table only';
    }
}