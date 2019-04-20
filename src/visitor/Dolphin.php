<?php
/**
 * Created by PhpStorm.
 * User: genom
 * Date: 4/20/19
 * Time: 11:43 AM
 */

namespace src\visitor;


class Dolphin implements Animal
{
    public function speak()
    {
        echo 'Tuut tuttu tuutt!';
    }

    public function accept(AnimalOperation $operation)
    {
        $operation->visitDolphin($this);
    }
}