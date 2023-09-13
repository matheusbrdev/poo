<?php

use Ferrari\Ferrari;
use Chevrolet\Chevrolet;

require_once 'Ferrari.php';
require_once 'Chevrolet.php';

try {
    $ferrari = new Ferrari(2, 'SF90', 'Vermelha', 'eletrica');

    var_dump($ferrari);
} catch (DomainException $exception) {
    echo $exception->getMessage();
}

$chevrolet = new Chevrolet(4, 'Cobalt LTZ', 'Branco', 'Manual');

var_dump($chevrolet);