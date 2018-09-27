<?php
$numbers = explode(' ', readline());
$numbers = array_map('intval', $numbers);
$last_element = null;
$lenght = 1;
$max_lenght = 1;

for ($i = 1; $i < count($numbers); $i++)
{
    if($numbers[$i] - 1 === $numbers[$i - 1]) {
        $lenght++;
    } else {
        if ($max_lenght < $lenght) {
            $max_lenght = $lenght;
            $last_element = $numbers[$i - 1];
        }
        $lenght = 1;
    }
}
if ($max_lenght < $lenght) {
    $max_lenght = $lenght;
    $last_element = $numbers[count($numbers) - 1];
}

for ($i = 0; $i < $max_lenght; $i++)
{
    echo $last_element - $max_lenght + $i + 1 . ' ';
}