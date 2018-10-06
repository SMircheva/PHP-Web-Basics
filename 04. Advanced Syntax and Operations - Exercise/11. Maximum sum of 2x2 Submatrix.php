<?php
$size = explode(', ', readline());
$row_size = intval($size[0]);
$col_size = intval($size[1]);
$matrix = [];

for ($row = 0; $row < $row_size; $row++) {
    $matrix[$row] = array_map('intval', explode(', ', readline()));
}

$max_sum = PHP_INT_MIN;
$row_index = 0;
$col_index = 0;

for ($row = 0; $row < count($matrix) - 1; $row++) {
    for ($col = 0; $col < count($matrix[$row]) - 1; $col++) {
        $current_sum = $matrix[$row][$col]
            + $current_sum = $matrix[$row][$col + 1]
            + $current_sum = $matrix[$row + 1][$col]
            + $current_sum = $matrix[$row + 1][$col + 1];
        if ($current_sum > $max_sum) {
            $max_sum = $current_sum;
            $row_index = $row;
            $col_index = $col;
        }

    }
}

for ($row = $row_index; $row < $row_index + 2; $row++)
{
    for ($col = $col_index; $col < $col_index + 2; $col++)
    {
        echo $matrix[$row][$col] . ' ';
    }
    echo PHP_EOL;
}

echo $max_sum;