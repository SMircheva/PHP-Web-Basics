<?php
$num = (int)readline();
$multiplier = (int)readline();

if ($multiplier >= 10) {
    $product = $num * $multiplier;
    echo "$num X $multiplier = $product";
} else {
    for ($i = $multiplier; $i <= 10; $i++)
    {
        $product = $num * $i;
        echo "$num X $i = $product" . PHP_EOL;
    }
}