<?php
/**
 * Created by PhpStorm.
 * User: genom
 * Date: 4/17/19
 * Time: 10:24 AM
 */

namespace src\structural\bridge;


use src\BaseController;
use src\structural\bridge\page\About;
use src\structural\bridge\page\Contact;
use src\structural\bridge\theme\Dark;
use src\structural\bridge\theme\Light;

class BridgeController extends BaseController
{

    public function index()
    {
        $darkTheme = new Dark();
        echo (new About($darkTheme))->getContent();

        echo '<br />';

        $lightTheme = new Light();
        echo (new Contact($lightTheme))->getContent();


    }

    public function getDescription()
    {
        // TODO: Implement getDescription() method.
    }
}