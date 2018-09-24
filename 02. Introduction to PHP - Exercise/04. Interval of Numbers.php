<?php
$num1 = (int)readline();
$num2 = (int)readline();

if ($num1 > $num2){
    for ($i = $num2; $i <= $num1; $i++)
    {
        echo $i . PHP_EOL;
    }
} else {
    for ($i = $num1; $i <= $num2; $i++)
    {
        echo $i . PHP_EOL;
    }
}