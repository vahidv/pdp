<?php
/**
 * Created by PhpStorm.
 * User: vahid
 * Date: 7/22/18
 * Time: 8:46 PM
 */

namespace src;


class App
{
    public function dispatch($request){

        $controllerName = (string) ucfirst($request) . 'Controller';
        $controller =  'src\\' . $request . '\\' . $controllerName;
        $controller =  new $controller;
        return $controller->index();
    }
}