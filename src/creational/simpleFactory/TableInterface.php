<?php
/**
 * Created by PhpStorm.
 * User: genom
 * Date: 4/15/19
 * Time: 12:04 PM
 */

namespace src\creational\simpleFactory;


interface TableInterface
{
    const Name = 'TableInterface';

    public function __construct(int $height, int $weight, int $area);

    public function getTableSpecs(): array ;
}