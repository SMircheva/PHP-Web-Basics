<?php
$size = explode(', ', readline());
$matrix = [];

for ($i = 0; $i < intval($size[0]); $i++)
{
    $inner_matrix = explode(' ', readline());
    $inner_matrix = array_map('intval', $inner_matrix);
    $matrix[$i] = $inner_matrix;
}

$sum = 0;

foreach ($matrix as $inner) {
    foreach ($inner as $number) {
        $sum += $number;
    }
}

echo $size[0].PHP_EOL;
echo $size[1].PHP_EOL;
echo $sum;