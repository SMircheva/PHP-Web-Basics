<?php

$decimalNum = new DecimalNumber(readline());

$decimalNum->PrintInReverse();

class DecimalNumber {
    private $number;

    /**
     * DecimalNumber constructor.
     * @param $number
     */
    public function __construct($number)
    {
        $this->number = $number;
    }

    function PrintInReverse() {
        echo(strrev($this->number));
    }
}