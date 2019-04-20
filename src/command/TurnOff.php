<?php
/**
 * Created by PhpStorm.
 * User: genom
 * Date: 4/20/19
 * Time: 9:58 AM
 */

namespace src\command;


class TurnOff implements CommandInterface
{

    protected $bulb;

    public function __construct(Bulb $bulb)
    {
        $this->bulb = $bulb;
    }

    public function execute()
    {
        $this->bulb->turnOff();
    }

    public function undo()
    {
        $this->bulb->turnOn();
    }

    public function redo()
    {
        $this->execute();
    }
}