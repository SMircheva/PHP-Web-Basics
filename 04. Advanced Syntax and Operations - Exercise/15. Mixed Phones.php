<?php
$phonebook = [];

while (true) {
    $input = explode(' : ', readline());
    if ($input[0] === 'Over') {
        ksort($phonebook);
        foreach ($phonebook as $name => $phone) {
            echo "$name -> $phone".PHP_EOL;
        }
        return;
    }
    if(is_numeric($input[0])) {
        $name = $input[1];
        $phonebook[$name] = $input[0];
    } else {
        $name = $input[0];
        $phonebook[$name] = $input[1];
    }
}