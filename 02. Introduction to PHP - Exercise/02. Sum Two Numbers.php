<?php
$firstNumber = (double)readline();
$secondNumber = (double)readline();
$sum = $firstNumber + $secondNumber;
$sum = number_format($sum, 2, '.', '');

echo '$firstNumber + $secondNumber = ' . $firstNumber . ' + ' . $secondNumber . ' = ' . $sum;