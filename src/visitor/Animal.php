<?php
/**
 * Created by PhpStorm.
 * User: genom
 * Date: 4/20/19
 * Time: 11:41 AM
 */

namespace src\visitor;

// Visitee
interface Animal
{
    public function accept(AnimalOperation $operation);
}