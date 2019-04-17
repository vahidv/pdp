<?php
/**
 * Created by PhpStorm.
 * User: genom
 * Date: 4/17/19
 * Time: 10:57 AM
 */

namespace src\composite\Developer;


class AndroidDeveloper implements DeveloperInterface
{

    protected $salary;
    protected $title;

    public function __construct($title, $salary)
    {
        $this->salary = $salary;
        $this->title  = $title;
    }

    public function getSalary()
    {
        return $this->salary;
    }

    public function getTitle()
    {
        return $this->salary;
    }
}