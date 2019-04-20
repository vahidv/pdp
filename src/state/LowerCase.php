<?php
/**
 * Created by PhpStorm.
 * User: genom
 * Date: 4/20/19
 * Time: 12:33 PM
 */

namespace src\state;


class LowerCase implements WritingState
{
    public function write(string $words)
    {
        echo strtolower($words);
    }
}