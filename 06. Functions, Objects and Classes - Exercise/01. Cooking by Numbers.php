<?php

$number = floatval(readline());
$commands = explode(', ', readline());

foreach ($commands as $command) {
    switch ($command) {
        case 'chop':
            $number = chopNumber($number);
            echo $number.PHP_EOL;
            break;
        case 'dice':
            $number = diceNumber($number);
            echo $number.PHP_EOL;
            break;
        case 'spice':
            $number = spiceNumber($number);
            echo $number.PHP_EOL;
            break;
        case 'bake':
            $number = bakeNumber($number);
            echo $number.PHP_EOL;
            break;
        case 'fillet':
            $number = filletNumber($number);
            echo $number.PHP_EOL;
            break;
    }
}

function chopNumber ($a) {
    return $a / 2;
}

function diceNumber ($a) {
    return sqrt($a);
}

function spiceNumber ($a) {
    return $a++;
}

function bakeNumber ($a) {
    return $a * 3;
}

function filletNumber ($a) {
    return $a - 0.2 * $a;
}
