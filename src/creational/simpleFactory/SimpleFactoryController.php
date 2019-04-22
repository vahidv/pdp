<?php
/**
 * Created by PhpStorm.
 * User: genom
 * Date: 4/15/19
 * Time: 11:30 AM
 */

namespace src\creational\simpleFactory;


use src\BaseController;

class SimpleFactoryController extends BaseController
{

    public function index()
    {
        $woodenTable = TableFactory::makeTable(100, 20, 2);

        return json_encode($woodenTable);
    }

    public function getDescription()
    {
        return 'Consider, you are building a house and you need doors. You can either put on your carpenter clothes, bring some wood, glue, nails and all the tools required to build the door and start building it in your house or you can simply call the factory and get the built door delivered to you so that you don\'t need to learn anything about the door making or to deal with the mess that comes with making it.

                In plain words
                
                Simple factory simply generates an instance for client without exposing any instantiation logic to the client
                
                Wikipedia says
                
                In object-oriented programming (OOP), a factory is an object for creating other objects – formally a factory is a function or method that returns objects of a varying prototype or class from some method call, which is assumed to be "new".';
    }
}