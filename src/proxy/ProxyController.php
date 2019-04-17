<?php
/**
 * Created by PhpStorm.
 * User: genom
 * Date: 4/17/19
 * Time: 12:40 PM
 */

namespace src\proxy;


use src\BaseController;

class ProxyController extends BaseController
{

    public function index()
    {
        $door = new SecureDoor(new Door());
        $door->open('invalid'); // Big no! It ain't possible.
        echo '<br />';

        $door->open('$ecr@t'); // Opening lab door
        echo '<br />';

        $door->close(); // Closing lab door
    }
}