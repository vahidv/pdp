<?php
/**
 * Created by PhpStorm.
 * User: vahid
 * Date: 7/23/18
 * Time: 1:18 PM
 */

namespace src\behavioral\chain;

class PayPal extends Account
{
    protected $balance;

    public function __construct(float $balance)
    {
        $this->balance = $balance;
    }
}