<?php
$input = explode(', ', readline());

$size = intval($input[0]);
$patten = strtolower($input[1]);
$count = 1;
$matrix = [];

switch ($patten) {
    case 'a':
        for ($row = 0; $row < $size; $row++)
        {
            for ($col = 0; $col < $size; $col++)
            {
                $matrix[$col][$row] = $count++;
            }
        }
        print_matrix($matrix);
        break;

    case 'b':
        for ($row = 0; $row < $size; $row++)
        {
            for ($col = 0; $col < $size; $col++)
            {
                if($row % 2 === 0) {
                    $matrix[$col][$row] = $count++;
                } else {
                    $matrix[$size - 1 - $col][$row] = $count++;
                }

            }
        }
        print_matrix($matrix);
        break;

    case 'c':
        for ($row = 0; $row < $size; $row++)
        {
            for ($col = 0; $col < $size; $col++)
            {
                $matrix[$row][$col] = $count++;
            }
        }
        print_matrix($matrix);
        break;
}

function print_matrix($matrix) {
    for ($row = 0; $row < count($matrix); $row++)
    {
        for ($col = 0; $col < count($matrix[$row]); $col++)
        {
            echo $matrix[$row][$col] . ' ';
        }
        echo PHP_EOL;
    }
}