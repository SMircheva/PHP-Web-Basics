<?php
$num = (int)readline();

for ($i = 1; $i <= 10; $i++){
    $product = $num * $i;
    echo "{$num} X {$i} = {$product}" . PHP_EOL;
}