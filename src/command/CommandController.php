<?php
/**
 * Created by PhpStorm.
 * User: genom
 * Date: 4/20/19
 * Time: 9:27 AM
 */

namespace src\command;


use src\BaseController;

class CommandController extends BaseController
{

    public function index()
    {
        $bulb = new Bulb();

        $turnOn  = new TurnOn($bulb);
        $turnOff = new TurnOff($bulb);

        $remote = new RemoteControl();
        $remote->submit($turnOn); // Bulb has been lit!
        echo '<br />';
        $remote->submit($turnOff); // Darkness!
    }
}