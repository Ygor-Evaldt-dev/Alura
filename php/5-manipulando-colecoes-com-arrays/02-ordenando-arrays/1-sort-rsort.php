<?php

$numeros = [
  0, 5, 2, 1, 9, 7
];

/* ORDENANDO ARRAY COMUM */
echo "Ordenando o array numeros" . PHP_EOL;
/* Ordem crescente */
sort($numeros);
var_dump($numeros);
echo PHP_EOL;

/* Ordem decrescente */
rsort($numeros);
var_dump($numeros);
echo PHP_EOL;