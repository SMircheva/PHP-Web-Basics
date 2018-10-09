<?php
$coords = array_map('floatval', explode(', ',readline()));

for ($i = 0; $i < count($coords) - 1; $i+= 2)
{
    echo WhereIsTheTreasure($coords[$i], $coords[$i + 1]);
}

function WhereIsTheTreasure ($x, $y) {
    if($x >= 1 && $x <= 3 && $y >= 1 && $y <= 3) {
        return 'Tuvalu'.PHP_EOL;
    }
    if($x >= 8 && $x <= 8 && $y >= 0 && $y <= 1) {
        return 'Tokelau'.PHP_EOL;
    }
    if($x >= 0 && $x <= 2 && $y >= 6 && $y <= 8) {
        return 'Tonga'.PHP_EOL;
    }
    if($x >= 5 && $x <= 7 && $y >= 3 && $y <= 6) {
        return 'Samoa'.PHP_EOL;
    }
    if($x >= 4 && $x <= 9 && $y >= 7 && $y <= 8) {
        return 'Cook'.PHP_EOL;
    }

    return 'On the bottom of the ocean'.PHP_EOL;
}