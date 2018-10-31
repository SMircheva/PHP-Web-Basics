<?php
/**
 * Created by PhpStorm.
 * User: Silviya
 * Date: 26-Oct-18
 * Time: 8:37 PM
 */

class Person
{
    /**
     * @var string
     */
    private $name;
    /**
     * @var double
     */
    private $money;
    /**
     * @var Product[]
     */
    private $bagOfProducts;

    /**
     * Person constructor.
     * @param string $name
     * @param float $money
     */
    public function __construct(string $name, float $money)
    {
        $this->setName($name);
        $this->setMoney($money);
        $this->bagOfProducts = [];
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
    public function getMoney(): float
    {
        return $this->money;
    }

    /**
     * @return array
     */
    public function getBagOfProducts(): array
    {
        return $this->bagOfProducts;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        if ($name == '') {
            throw new Exception('Name cannot be an empty string');
        }
        $this->name = $name;
    }

    /**
     * @param float $money
     */
    public function setMoney(float $money): void
    {
        if ($money < 0){
            throw new Exception('Money cannot be negative');
        }
        $this->money = $money;
    }

    /**
     * @param array $bagOfProducts
     */
    public function addProduct(Product $product): void
    {
        $this->bagOfProducts[] = $product;
    }

    public function buyProduct(Product $product) {
        if ($this->getMoney() < $product->getCost()) {
            throw new Exception($this->getName()." can't afford ".$product->getName().PHP_EOL);
        }

        $this->money -= $product->getCost();
        $this->bagOfProducts[] = $product;
        echo $this->getName()." bought ".$product->getName().PHP_EOL;
    }

    public function __toString()
    {
        if (count($this->bagOfProducts) === 0) {
            return $this->getName()." - Nothing bought".PHP_EOL;
        }

        $output = $this->name . " - ";

        $output .= implode(',',
            array_map(function (Product $product) {
                return $product->getName();
            }, $this->bagOfProducts));

        return $output.PHP_EOL;
    }

}