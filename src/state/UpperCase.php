<?php
/**
 * Created by PhpStorm.
 * User: genom
 * Date: 4/20/19
 * Time: 12:32 PM
 */

namespace src\state;


class UpperCase implements WritingState
{
    public function write(string $words)
    {
        echo strtoupper($words);
    }
}