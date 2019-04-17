<?php
/**
 * Created by PhpStorm.
 * User: genom
 * Date: 4/17/19
 * Time: 10:24 AM
 */

namespace src\bridge;


use src\BaseController;
use src\bridge\page\About;
use src\bridge\page\Contact;
use src\bridge\theme\Dark;
use src\bridge\theme\Light;

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
}