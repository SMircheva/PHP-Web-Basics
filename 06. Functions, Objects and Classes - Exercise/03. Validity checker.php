<?php

$nums = explode(', ', readline());
if(DistanceIsWholeNum($nums[0], $nums[1], 0, 0)) {
    echo "{{$nums[0]}, $nums[1]} to {0, 0} is valid".PHP_EOL;
}
else {
    echo "{{$nums[0]}, $nums[1]} to {0, 0} is invalid".PHP_EOL;
}

if(DistanceIsWholeNum($nums[2], $nums[3], 0, 0)) {
    echo "{{$nums[2]}, $nums[3]} to {0, 0} is valid".PHP_EOL;
}
else {
    echo "{{$nums[2]}, $nums[3]} to {0, 0} is invalid".PHP_EOL;
}

if(DistanceIsWholeNum($nums[0], $nums[1], $nums[2], $nums[3])) {
    echo "{{$nums[0]}, $nums[1]} to {{$nums[2]}, $nums[3]} is valid".PHP_EOL;
}
else {
    echo "{{$nums[0]}, $nums[1]} to {{$nums[2]}, $nums[3]} is invalid".PHP_EOL;
}

function DistanceIsWholeNum ($x1, $y1, $x2, $y2) {
    $distance = sqrt(pow($x1 - $x2, 2) + pow($y1 - $y2, 2));
    return (floor($distance) === $distance);
}