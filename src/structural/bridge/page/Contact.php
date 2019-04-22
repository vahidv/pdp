<?php
/**
 * Created by PhpStorm.
 * User: genom
 * Date: 4/17/19
 * Time: 10:33 AM
 */

namespace src\structural\bridge\page;


use src\structural\bridge\theme\ThemeInterface;

class Contact implements PageInterface
{
    public $theme;

    public function __construct(ThemeInterface $them)
    {
        $this->theme = $them;
    }

    public function getContent()
    {
        return 'this is contact page with ' . $this->theme->getColor();
    }

}