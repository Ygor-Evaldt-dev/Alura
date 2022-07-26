<?php

/* A função usort() classifica um array usando uma função de comparação definida pelo usuário.
Ex sintaxe: usort($array, função usuario) */

$array = [
  [
    'nome' => 'Ygor Evaldt',
    'nota' => 10
  ],
  [
    'nome' => 'Thais Constant',
    'nota' => 9
  ],
  [
    'nome' => 'Emma',
    'nota' => 6
  ]
];

/* Ensinando a ordem para a função "usort(array a ser ordenado, função de ordenação)" */
echo "Ordenando em ordem Crescente." . PHP_EOL;

usort($array, 'ordemCrescente');
var_dump($array);

/* função de ordenação crescente*/
function ordemCrescente($item1, $item2): int
{
  return $item1['nota'] <=> $item2['nota'];
}

echo "Ordenando em ordem decrescente." . PHP_EOL;

usort($array, 'ordemDecrescente');
var_dump($array);

/* função de ordenação decrescente*/
function ordemDecrescente($item1, $item2): int
{
  return $item2['nota'] <=> $item1['nota'];
}