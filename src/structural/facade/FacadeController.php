<?php
/**
 * Created by PhpStorm.
 * User: genom
 * Date: 4/17/19
 * Time: 12:16 PM
 */

namespace src\structural\facade;


use src\BaseController;

class FacadeController extends BaseController
{
    public function index()
    {
        $computer = new ComputerFacade(new Computer());
        $computer->turnOn(); // Ouch! Beep beep! Loading.. Ready to be used!
        echo '<br />';
        $computer->turnOff(); // Bup bup buzzz! Haah! Zzzzz
    }

    public function getDescription()
    {
        // TODO: Implement getDescription() method.
    }
}