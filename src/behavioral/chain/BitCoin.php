<?php
/**
 * Created by PhpStorm.
 * User: vahid
 * Date: 7/23/18
 * Time: 1:19 PM
 */

namespace src\behavioral\chain;

class BitCoin extends Account
{
    protected $balance;

    public function __construct(float $balance)
    {
        $this->balance = $balance;
    }
}