<?php
$text = readline();
$commands = readline();

$symbol = substr($commands, 0, strpos($commands, ' '));
$occurance = (int)substr($commands, strpos($commands, ' ') + 1);
$count = 0;

for ($i = 0; $i < strlen($text); $i++)
{
    if ($text[$i] === $symbol) {
        $count++;
        if ($count === $occurance) {
            echo $i;
            exit();
        }
    }
}

echo "Find the letter yourself!";