<?php
/**
 * Created by PhpStorm.
 * User: vahid
 * Date: 7/23/18
 * Time: 1:15 PM
 */

namespace src\chain;

use Exception;

abstract class Account
{

    protected $balance;
    protected $successor;

    public function setNext(Account $account)
    {
        $this->successor = $account;
    }

    public function pay(float $amountToPay)
    {
        try {
            if ($this->canPay($amountToPay)) {
                echo sprintf('Paid %s using %s' . PHP_EOL, $amountToPay, get_called_class());
            } elseif ($this->successor) {
                echo sprintf('Cannot pay using %s. Proceeding ..' . PHP_EOL, get_called_class());
                $this->successor->pay($amountToPay);
            } else {
                throw new Exception('None of the accounts have enough balance');
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function canPay($amount): bool
    {
        return $this->balance >= $amount;
    }
}