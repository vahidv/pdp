<?php
/**
 * Created by PhpStorm.
 * User: genom
 * Date: 4/17/19
 * Time: 10:33 AM
 */

namespace src\bridge\page;


use src\bridge\theme\ThemeInterface;

interface PageInterface
{
    public function __construct(ThemeInterface $them);
    public function getContent();
}