<?php
/**
 * Created by PhpStorm.
 * User: genom
 * Date: 4/17/19
 * Time: 10:33 AM
 */

namespace src\structural\bridge\page;


use src\structural\bridge\theme\ThemeInterface;

interface PageInterface
{
    public function __construct(ThemeInterface $them);
    public function getContent();
}