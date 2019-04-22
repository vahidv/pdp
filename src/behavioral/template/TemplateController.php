<?php
/**
 * Created by PhpStorm.
 * User: genom
 * Date: 4/20/19
 * Time: 12:43 PM
 */

namespace src\behavioral\template;


use src\BaseController;

class TemplateController extends BaseController
{

    public function index()
    {
        $androidBuilder = new AndroidBuilder();
        $androidBuilder->build();

        // Output:
        // Running android tests
        // Linting the android code
        // Assembling the android build
        // Deploying android build to server

        echo '<br />';
        $iosBuilder = new IosBuilder();
        $iosBuilder->build();

        // Output:
        // Running ios tests
        // Linting the ios code
        // Assembling the ios build
        // Deploying ios build to server
    }

    public function getDescription()
    {
        // TODO: Implement getDescription() method.
    }
}