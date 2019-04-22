<?php
/**
 * Created by PhpStorm.
 * User: genom
 * Date: 4/17/19
 * Time: 11:01 AM
 */

namespace src\structural\composite;


use src\structural\composite\Developer\DeveloperInterface;

class ProgrammerTeam
{

    protected $developers;

    public function setDeveloper(DeveloperInterface $developer)
    {
        $this->developers[] = $developer;
    }

    public function getTeamTotalSalary()
    {
        $total = 0;
        foreach ($this->developers as $developer) {
            $total += $developer->getSalary();
        }

        return $total;
    }

}