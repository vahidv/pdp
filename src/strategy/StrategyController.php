<?php
/**
 * Created by PhpStorm.
 * User: vahid
 * Date: 7/22/18
 * Time: 8:52 PM
 */

namespace src\strategy;


use src\BaseController;

class StrategyController extends BaseController
{

    public function index()
    {
        $dataSet = [1, 5, 6, 8, 12];

        //here we can done search by two strategy
        //bubble or quick sort but quick sort is slow for small array cases
        //so we can use strategy pattern to have multiple choice by implementing same interface
        $sorter = new Sorter(new BubbleSortStrategy());
        $sorter->sort($dataSet);
        echo '<br />';

        $sorter = new Sorter(new QuickSortStrategy());
        $sorter->sort($dataSet);
    }
}