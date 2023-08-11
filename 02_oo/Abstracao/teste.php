<?php

require_once "Carro.php";

$carro = new Carro(4, 'Branco');

echo $carro->portas . PHP_EOL;
echo $carro->cor;

echo PHP_EOL;

echo $carro->getCor() . PHP_EOL;

$carro2 = new Carro(3, 'Vermelho');
echo PHP_EOL . 'Cor do carro 2:' . $carro2->cor;