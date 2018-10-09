<?php
$input = readline();
while (calculateAverage($input) < 5) {
    $input = appendChar($input, '9');
}
echo $input;

function calculateAverage($num) {
    $sum = 0;
    for ($i = 0; $i < strlen($num); $i++)
    {
        $sum += intval($num[$i]);
    }
    return $sum / strlen($num);
}

function appendChar ($string, $char) {
    return $string . $char;
}