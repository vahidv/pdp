<?php
/**
 * Created by PhpStorm.
 * User: genom
 * Date: 4/17/19
 * Time: 12:40 PM
 */

namespace src\proxy;


interface DoorInterface
{
    public function open();
    public function close();
}