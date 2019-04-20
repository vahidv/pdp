<?php
/**
 * Created by PhpStorm.
 * User: genom
 * Date: 4/20/19
 * Time: 10:27 AM
 */

namespace src\iterator;


use src\BaseController;

class IteratorController extends BaseController
{

    public function index()
    {
        $stationList = new StationList();

        $stationList->addStation(new RadioStation(89));
        $stationList->addStation(new RadioStation(101));
        $stationList->addStation(new RadioStation(102));
        $stationList->addStation(new RadioStation(103.2));

        foreach($stationList as $station) {
            echo $station->getFrequency() . PHP_EOL;
        }

        $stationList->removeStation(new RadioStation(89)); // Will remove station 89
    }
}