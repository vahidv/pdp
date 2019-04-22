<?php
/**
 * Created by PhpStorm.
 * User: vahid
 * Date: 7/23/18
 * Time: 1:17 PM
 */

namespace src\behavioral\chain;

class Bank extends Account
{
    protected $balance;

    public function __construct(float $balance)
    {
        $this->balance = $balance;
    }
}