<?php
$phonebook = [];
while (true) {
    $commands = explode(' ', readline());

    if ($commands[0] === 'END'){
        return;
    } else if ($commands[0] === 'ListAll') {
        ksort($phonebook);
        foreach ($phonebook as $key => $number) {
            echo "$key -> $number".PHP_EOL;
        }
        continue;
    }

    $command = $commands[0];
    $name = $commands[1];

    if ($command === 'A'){
        $phone = $commands[2];
        $phonebook[$name] = $phone;
    } else if ($command === 'S') {
        if (key_exists($name, $phonebook)) {
            echo "$name -> $phonebook[$name]".PHP_EOL;
        }else {
            echo "Contact $name does not exist.".PHP_EOL;
        }
    }
}
