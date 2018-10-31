<?php

spl_autoload_register();

$length = doubleval(readline());
$width = doubleval(readline());
$height = doubleval(readline());

try {
    $box = new Box($length, $width, $height);

    echo 'Surface Area - '.number_format($box->getSurface(), 2, '.', '').PHP_EOL;
    echo 'Lateral Surface Area - '.number_format($box->getLateralSurface(), 2, '.', '').PHP_EOL;
    echo 'Volume - '.number_format($box->getVolume(), 2, '.', '').PHP_EOL;
} catch (Exception $e) {
    echo $e->getMessage();
}


