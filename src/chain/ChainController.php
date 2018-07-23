<?php
/**
 * Created by PhpStorm.
 * User: vahid
 * Date: 7/23/18
 * Time: 12:04 PM
 */

namespace src\chain;

use src\BaseController;

class ChainController extends BaseController
{

    public function index()
    {
        $bank = new Bank(200);
        $payPal = new PayPal(450);
        $bitCoin = new BitCoin(600);

        $bank->setNext($payPal);
        $payPal->setNext($bitCoin);

        $bank->pay(400);
        echo '<br />';
        $bank->pay(550);
        echo '<br />';
        $bank->pay(750);

    }
}