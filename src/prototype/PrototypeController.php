<?php
/**
 * Created by PhpStorm.
 * User: genom
 * Date: 4/15/19
 * Time: 2:51 PM
 */

namespace src\prototype;


use src\BaseController;

class PrototypeController extends BaseController
{

    public function index()
    {
        $player1 = new Player();
        $player1->setName('vahid');
        $player1->setNumber(10);

        $player2 = clone $player1;
        $player2->setNumber(20);

        echo $player1->getNumber();
        echo '<br />';
        echo $player2->getNumber();

    }
}