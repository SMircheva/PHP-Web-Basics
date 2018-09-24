<?php
$input = readline();
$digits = '';
$letters = '';
$symbols = '';

for ($i = 0; $i < strlen($input); $i++)
{
    if(ctype_digit($input[$i])) {
        $digits .= $input[$i];
    }
    else if (ctype_alpha($input[$i])) {
        $letters .= $input[$i];
    } else {
        $symbols .= $input[$i];
    }
}

echo $digits . PHP_EOL . $letters . PHP_EOL . $symbols;