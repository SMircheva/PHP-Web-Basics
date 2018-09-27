<?php
$numbers = explode(' ', readline());
$numbers = array_map('intval', $numbers);

if (count($numbers)===1) {
    echo $numbers[0];
    return;
}

$condensed = [];

for ($j = 0; $j < count($numbers) - 1; $j++)
{
    for ($i = 0; $i < count($numbers) - 1; $i++)
    {
        $condensed[$i] = $numbers[$i] + $numbers[$i + 1];
    }
    $numbers = $condensed;
}

for ($i = 0; $i < count($numbers) - 1; $i++)
{
    $condensed[$i] = $numbers[$i] + $numbers[$i + 1];
}

echo $condensed[0];