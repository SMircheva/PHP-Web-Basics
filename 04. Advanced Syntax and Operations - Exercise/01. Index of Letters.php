<?php
$characters = [];
for ($i = 0; $i < 26; $i++)
{
    $characters[$i] = chr($i + 97);
}

$input = strtolower(readline());
for ($i = 0; $i < strlen($input); $i++)
{
    $key = array_search($input[$i], $characters);
    echo "$input[$i] -> $key".PHP_EOL;
}