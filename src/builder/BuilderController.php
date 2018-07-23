<?php
/**
 * Created by PhpStorm.
 * User: vahid
 * Date: 7/23/18
 * Time: 5:01 PM
 */

namespace src\builder;


use src\BaseController;

class BuilderController extends BaseController
{

    public function index()
    {
        $truckBuilder = new TruckBuilder();
        $newVehicle = (new Director())->build($truckBuilder);

        var_dump(get_class($newVehicle));
        echo '<br />';

        $carBuilder = new CarBuilder();
        $newVehicle = (new Director())->build($carBuilder);

        var_dump(get_class($newVehicle));
    }
}