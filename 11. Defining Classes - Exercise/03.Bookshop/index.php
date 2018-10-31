<?php

spl_autoload_register();

$author = readline();
$title = readline();
$price = floatval(readline());
$type = readline();

$book = null;

try {
    switch ($type) {
        case "GOLD":
            $book = new GoldenEditionBook($author, $title, $price);
            break;

        case "STANDARD":
            $book = new Book($author, $title, $price);
            break;

        default:
            throw new Exception("Type is not valid!");
            break;
    }
} catch (Exception $e) {
    echo $e->getMessage().PHP_EOL;
    return;
}
echo $book->getPrice();