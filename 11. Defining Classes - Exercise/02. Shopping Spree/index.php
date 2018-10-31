<?php

spl_autoload_register();

$personData = preg_split("/[=;]/", readline());

$people = [];
$products = [];

for ($i = 0; $i < count($personData) - 1; $i+=2)
{
     try {
         $name = $personData[$i];
         $money = floatval($personData[$i + 1]);

         $people[$name] = new Person($name, $money);

     } catch (Exception $ex) {
         echo $ex->getMessage();
         return;
     }
}

$productsData = preg_split("/[=;]/", readline(), -1, PREG_SPLIT_NO_EMPTY);

for ($i = 0; $i < count($productsData) - 1; $i+=2) {
    $name = $productsData[$i];
    $price = floatval($productsData[$i+1]);
    $products[$name] = new Product($name, $price);
}

$input = readline();

while ($input != "END") {
    $data = explode(' ', $input);

    $personName = $data[0];
    $productName = $data[1];

    try {
        $people[$personName]->buyProduct($products[$productName]);
    } catch (Exception $ex) {
        echo $ex->getMessage();
    }

    $input = readline();
}

foreach ($people as $shopper) {
    echo $shopper;
}