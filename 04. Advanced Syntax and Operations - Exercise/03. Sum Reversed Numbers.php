<?php
$arr = explode(" ", readline());
$sum = 0;

foreach ($arr as $item) {
    $current_value = (int)strrev($item);
    $sum += $current_value;
}

echo $sum;