<?php
/* Use a função krsort() para classificar um array associativo em ordem decrescente, de acordo com a chave. */

$listaAlunos = [
  'Ana' => 10,
  'Bruna' => 10,
  'Leticia' => 7,
  'Thais' => 9,
  'Erick' => 9.5,
  'Ygor' => 10
];

/* Ordenando array associativo em ordem crescente */
ksort($listaAlunos);
var_dump($listaAlunos);

/* Ordenando array associativo em ordem decrescente */
krsort($listaAlunos);
var_dump($listaAlunos);