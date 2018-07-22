<?php
/**
 * Created by PhpStorm.
 * User: vahid
 * Date: 7/22/18
 * Time: 3:49 PM
 */

namespace src\strategy;

use src\strategy\SortStrategy;

class BubbleSortStrategy implements SortStrategy
{

    public function sort(array $dataSet): array
    {
        echo "Sorting using bubble sort";

        // Do sorting
        return $dataSet;
    }
}