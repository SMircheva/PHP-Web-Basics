<?php
/**
 * Created by PhpStorm.
 * User: Silviya
 * Date: 26-Oct-18
 * Time: 10:34 PM
 */

class Book
{
    /**
     * @var string
     */
    private $title;
    /**
     * @var string
     */
    private $author;
    /**
     * @var float
     */
    private $price;

    /**
     * Book constructor.
     * @param string $title
     * @param string $author
     * @param float $price
     */
    public function __construct(string $author, string $title, float $price)
    {
            $this->setAuthor($author);
            $this->setTitle($title);
            $this->setPrice($price);
            echo "OK".PHP_EOL;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        if(strlen($title) < 3) {
            throw new Exception("Title not valid");
        }
        $this->title = $title;
    }

    /**
     * @param string $author
     */
    public function setAuthor(string $author): void
    {
        if (is_numeric(explode(' ', $author)[1][0])) {
            throw new Exception("Author not valid!");
        }
        $this->author = $author;
    }

    /**
     * @param float $price
     */
    public function setPrice(float $price): void
    {
        if ($price <= 0) {
            throw new Exception("Price not valid!");
        }
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getAuthor(): string
    {
        return $this->author;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }




}