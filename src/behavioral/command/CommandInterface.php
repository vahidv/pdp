<?php
/**
 * Created by PhpStorm.
 * User: genom
 * Date: 4/20/19
 * Time: 9:57 AM
 */

namespace src\behavioral\command;


interface CommandInterface
{
    public function execute();

    public function undo();

    public function redo();
}