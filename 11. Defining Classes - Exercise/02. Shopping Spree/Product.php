<?php
/**
 * Created by PhpStorm.
 * User: Silviya
 * Date: 26-Oct-18
 * Time: 8:37 PM
 */

class Product
{
    /**
     * @var string
     */
    private $name;
    /**
     * @var double
     */
    private $cost;

    /**
     * Product constructor.
     * @param string $name
     * @param float $cost
     */
    public function __construct(string $name, float $cost)
    {
        $this->name = $name;
        $this->cost = $cost;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return float
     */
    public function getCost(): float
    {
        return $this->cost;
    }



}