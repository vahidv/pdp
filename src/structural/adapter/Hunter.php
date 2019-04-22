<?php
/**
 * Created by PhpStorm.
 * User: vahid
 * Date: 7/22/18
 * Time: 11:32 AM
 */

namespace src\structural\adapter;

use src\structural\adapter\Lion\LionInterface;

class Hunter
{
    protected $lion;

    public function __construct(LionInterface $lion)
    {
        $this->lion = $lion;
    }

    public function hunt()
    {
        return $this->lion->roar();
    }
}