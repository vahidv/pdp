<?php
/**
 * Created by PhpStorm.
 * User: genom
 * Date: 4/17/19
 * Time: 10:54 AM
 */

namespace src\structural\composite;


use src\BaseController;
use src\structural\composite\Developer\AndroidDeveloper;
use src\structural\composite\Developer\BackendDeveloper;

class CompositeController extends BaseController
{
    public function index()
    {
        $androidDeveloper1 = new AndroidDeveloper('android', 10000);
        $androidDeveloper2 = new AndroidDeveloper('android', 5000);
        $backendDeveloper = new BackendDeveloper('android', 20000);

        $team = new ProgrammerTeam();
        $team->setDeveloper($androidDeveloper1);
        $team->setDeveloper($androidDeveloper2);
        $team->setDeveloper($backendDeveloper);

        echo $team->getTeamTotalSalary();
    }

    public function getDescription()
    {
        // TODO: Implement getDescription() method.
    }
}