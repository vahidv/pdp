<?php
/**
 * Created by PhpStorm.
 * User: genom
 * Date: 4/17/19
 * Time: 12:31 PM
 */

namespace src\structural\flyweight;


class TeaMaker
{
    protected $availableTea = [];

    public function make($preference)
    {
        if (empty($this->availableTea[$preference])) {
            $this->availableTea[$preference] = new Tea();
        }

        return $this->availableTea[$preference];
    }
}