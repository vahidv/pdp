<?php
/**
 * Created by PhpStorm.
 * User: vahid
 * Date: 7/22/18
 * Time: 3:43 PM
 */

namespace src\strategy;

interface SortStrategy
{
    public function sort(array $dataSet): array;
}