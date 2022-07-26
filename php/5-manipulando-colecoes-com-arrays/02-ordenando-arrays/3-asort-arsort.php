<?php

/* Use a função asort() para classificar um array associativo em ordem crescente, de acordo com o valor. */

/* ORDENANDO ARRAY ASSOCIATIVO */
echo "Ordenando o array numeroEscrito" . PHP_EOL;
$numeroEscrito = [
  'zero' => 0,
  'cinco' => 5,
  'dois' => 2,
  'um' => 1,
  'nove' => 9,
  'sete' => 7
];

/* Ordem crescente */
asort($numeroEscrito);
var_dump($numeroEscrito);
echo PHP_EOL;

/* Ordem decrescente */
arsort($numeroEscrito);
var_dump($numeroEscrito);
echo PHP_EOL;