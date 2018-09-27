<?php
$numbers = explode(' ', readline());
$most_frequent = null;
$frequency = 1;
$max_frequency = 1;

for ($i = 1; $i < count($numbers); $i++)
{
    if($numbers[$i] === $numbers[$i - 1]) {
        $frequency++;
    } else {
        if ($max_frequency < $frequency) {
            $max_frequency = $frequency;
            $most_frequent = $numbers[$i - 1];
        }
        $frequency = 1;
    }
}

echo str_repeat($most_frequent . ' ', $max_frequency);