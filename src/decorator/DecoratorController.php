<?php
/**
 * Created by PhpStorm.
 * User: vahid
 * Date: 7/22/18
 * Time: 8:53 PM
 */

namespace src\decorator;


use src\BaseController;

class DecoratorController extends BaseController
{

    public function index()
    {
        $simpleCoffee = new SimpleCoffee();
        echo '<br />';
        echo $simpleCoffee->getCost();
        echo '<br />';
        echo $simpleCoffee->getDescription();

        //so imagine we have some kind of coffee that
        //if we use theme cost and description must changed
        //here we should decorator to decorate main object simple coffee with any thing we want additional
        $simpleWithVanilla = new VanillaCoffee(
            $simpleCoffee
        );
        echo '<br />';
        echo $simpleWithVanilla->getCost();
        echo '<br />';
        echo $simpleWithVanilla->getDescription();

        // simple coffee with vanilla and milk
        $simpleWithVanilla =
            new VanillaCoffee(
                new MilkCoffee($simpleCoffee)
            );
        echo '<br />';
        echo $simpleWithVanilla->getCost();
        echo '<br />';
        echo $simpleWithVanilla->getDescription();
    }
}