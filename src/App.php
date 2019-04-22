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
    private static $instance;

    private function __construct()
    {
        //hide constructor
    }

    static public function getInstance(): App
    {
        if (!self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function dispatch($type, $pattern)
    {
        $controllerName = (string)ucfirst($pattern) . 'Controller';
        $controller     = 'src\\' . $type . '\\' . $pattern . '\\' . $controllerName;
        $controller     = new $controller;

        $result      = $controller->index();
        $description = $controller->getDescription();

        return json_encode([
            'result' => $result,
            'description' => $description
        ]);
    }

    private function __clone()
    {
        //disable cloning
    }

    private function __wakeup()
    {
        //disable unserialize
    }
}