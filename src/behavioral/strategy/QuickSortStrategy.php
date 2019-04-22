<?php
/**
 * Created by PhpStorm.
 * User: vahid
 * Date: 7/22/18
 * Time: 3:50 PM
 */

namespace src\behavioral\strategy;

use src\strategy\SortStrategy;

class QuickSortStrategy implements SortStrategy
{

    public function sort(array $dataSet): array
    {
        echo "Sorting using quick sort";

        // Do sorting
        return $dataSet;
    }
}