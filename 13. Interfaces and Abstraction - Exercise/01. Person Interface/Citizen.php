<?php
/**
 * Created by PhpStorm.
 * User: Silviya
 * Date: 31-Oct-18
 * Time: 7:13 PM
 */

class Citizen implements Person
{
    /**
     * @var string
     */
    private $name;
    /**
     * @var int
     */
    private $age;


    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    public function __construct(string $name, int $age)
    {
        $this->setName($name);
        $this->setAge($age);
    }

    public function __toString()
    {
        return $this->name.PHP_EOL.$this->age.PHP_EOL;
    }

}