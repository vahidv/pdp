<?php
/**
 * Created by PhpStorm.
 * User: vahid
 * Date: 7/22/18
 * Time: 3:52 PM
 */

namespace src\behavioral\strategy;

class Sorter
{
    protected $sorter;

    public function __construct(SortStrategy $sorter)
    {
        $this->sorter = $sorter;
    }

    public function sort($dataSet): array
    {
        return $this->sorter->sort($dataSet);
    }
}