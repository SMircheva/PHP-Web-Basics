<?php
/**
 * Created by PhpStorm.
 * User: Silviya
 * Date: 26-Oct-18
 * Time: 10:35 PM
 */

class GoldenEditionBook extends Book
{

    /**
     * GoldenEditionBook constructor.
     */
    public function __construct(string $title, string $author, float $price)
    {
        parent::__construct($title, $author, $price * 1.3);
    }
}