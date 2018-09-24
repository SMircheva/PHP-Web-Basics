<?php
$input = readline();

if (strlen($input) <= 20) {
    echo str_pad($input, 20, "*");
} else {
    echo substr($input, 0, 20);
}