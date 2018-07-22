<?php
/**
 * Created by PhpStorm.
 * User: vahid
 * Date: 7/22/18
 * Time: 1:46 PM
 */

use src\adapter\Dog\DogAdapter;
use src\adapter\Dog\WildDog;
use src\adapter\Lion\AfricanLion;
use src\adapter\Hunter;

#### factory implementation test ####

$lion = new AfricanLion();
$dog  = new WildDog();

$hunter = new Hunter($lion);
$hunter->hunt();
echo '<br />';
//here we can not use dog object because
//Hunter expects LionInterface object so we should use
//adapter to adapt the interface
$dogAdapter = new DogAdapter($dog);
$hunter     = new Hunter($dogAdapter);
$hunter->hunt();

#### end of factory ####