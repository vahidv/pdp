<?php
/**
 * Created by PhpStorm.
 * User: genom
 * Date: 4/17/19
 * Time: 10:55 AM
 */

namespace src\structural\composite\Developer;


interface DeveloperInterface
{
    public function __construct($title, $salary);

    public function getSalary();
    public function getTitle();
}