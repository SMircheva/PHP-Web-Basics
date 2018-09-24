<?php
$n = (int)readline();
$currentNum = 1;
$sum = 0;

for ($i = 1; $i <= $n; $i++)
{
    echo $currentNum . PHP_EOL;
    $sum += $currentNum;
    $currentNum += 2;
}
echo "Sum: {$sum}";