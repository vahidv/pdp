<?php
/**
 * Created by PhpStorm.
 * User: genom
 * Date: 4/20/19
 * Time: 9:59 AM
 */

namespace src\command;


class RemoteControl
{
    public function submit(CommandInterface $command)
    {
        $command->execute();
    }
}