<?php

$array = [
  1,
  2,
  3,
  4,
  5,
  6,
  7
];

$arrayComChave = [
  'um' => 1,
  'dois' => 2,
  'três' => 3,
  'quatro' => 4,
  'cinco' => 5,
];

/* Verificar as diferenças entre arrays */
var_dump(array_diff($array, $arrayComChave));

/* Pegar somente as chaves ou valores de um array */
var_dump(array_keys($arrayComChave));

/* Unir arrays com array_merge e com + */
var_dump(array_merge($array, $arrayComChave));
var_dump($array + $arrayComChave);

/* Usar o operador */
$nomeMaisSobrenome = ['Ygor', 'Evaldt'];
function nomeCompleto(string $nome, string $sobrenome): void
{
  echo "$nome $sobrenome";
}
nomeCompleto(...$nomeMaisSobrenome);
