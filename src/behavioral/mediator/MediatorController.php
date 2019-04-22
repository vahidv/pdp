<?php
/**
 * Created by PhpStorm.
 * User: genom
 * Date: 4/20/19
 * Time: 10:44 AM
 */

namespace src\behavioral\mediator;


use src\BaseController;

class MediatorController extends BaseController
{
    public function index()
    {
        $mediator = new ChatRoom();

        $john = new User('John Doe', $mediator);
        $jane = new User('Jane Doe', $mediator);

        $john->send('Hi there!');
        echo '<br />';
        $jane->send('Hey!');

        // Output will be
        // Feb 14, 10:58 [John]: Hi there!
        // Feb 14, 10:58 [Jane]: Hey!
    }

    public function getDescription()
    {
        // TODO: Implement getDescription() method.
    }
}