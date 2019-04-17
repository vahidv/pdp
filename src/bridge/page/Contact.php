<?php
/**
 * Created by PhpStorm.
 * User: genom
 * Date: 4/17/19
 * Time: 10:33 AM
 */

namespace src\bridge\page;


use src\bridge\theme\ThemeInterface;

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