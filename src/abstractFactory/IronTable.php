<?php
/**
 * Created by PhpStorm.
 * User: genom
 * Date: 4/15/19
 * Time: 1:30 PM
 */

namespace src\abstractFactory;



class IronTable implements TableInterface
{

    public $height;
    public $weight;
    public $area;

    public function __construct(int $height, int $weight, int $area)
    {
        $this->height = $height;
        $this->weight = $weight;
        $this->area = $area;
    }

    public function getTableSpecs(): array
    {
        return [
            'height' => $this->height,
            'weight' => $this->weight,
            'area' => $this->area,
        ];
    }
}