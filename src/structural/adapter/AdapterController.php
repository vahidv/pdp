<?php
/**
 * Created by PhpStorm.
 * User: vahid
 * Date: 7/22/18
 * Time: 8:03 PM
 */

namespace src\structural\adapter;


use src\BaseController;
use src\structural\adapter\Dog\DogAdapter;
use src\structural\adapter\Dog\WildDog;
use src\structural\adapter\Lion\AfricanLion;

class AdapterController extends BaseController
{

    public function index()
    {

        $lion = new AfricanLion();
        $dog = new WildDog();

        $hunter = new Hunter($lion);
        $hunter->hunt();
        echo '<br />';
        //here we can not use dog object because
        //Hunter expects LionInterface object so we should use
        //adapter to adapt the interface
        $dogAdapter = new DogAdapter($dog);
        $hunter = new Hunter($dogAdapter);
        $hunter->hunt();

    }

    public function getDescription()
    {
        // TODO: Implement getDescription() method.
    }
}