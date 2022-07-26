<?php

$lista = [1, 2, 3, 4, 5, 6, 7, 8, 9];

echo "Adicionando varios valores a um array" . PHP_EOL;
array_push($lista, 10, 11, 10);
var_dump($lista);

echo "Adicionando valor no inicio de um array" . PHP_EOL;
array_unshift($lista, 0);
var_dump($lista);

echo "Removendo valor do inicio de um array" . PHP_EOL;
array_shift($lista);
var_dump($lista);

echo "Remover valores de um array" . PHP_EOL;
array_splice($lista, 2, 3, 4);
var_dump($lista);
