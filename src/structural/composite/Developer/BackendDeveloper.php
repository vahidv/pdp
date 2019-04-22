<?php
/**
 * Created by PhpStorm.
 * User: genom
 * Date: 4/17/19
 * Time: 10:58 AM
 */

namespace src\structural\composite\Developer;


class BackendDeveloper implements DeveloperInterface
{

    protected $salary;
    protected $title;
    protected $desiredLanguage;

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

    public function getDesiredLanguage()
    {
        return $this->desiredLanguage;
    }

    public function setDesiredLanguage($language)
    {
        $this->desiredLanguage = $language;
    }
}