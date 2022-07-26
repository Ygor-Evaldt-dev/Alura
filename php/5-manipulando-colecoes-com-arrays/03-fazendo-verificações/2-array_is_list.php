<?php

/* 
  Determina se o dado array é uma lista. Um array é considerado uma lista se suas chaves consistem em números consecutivos de 0 até -1 
  Sintaxe: array_is_list($array) 
*/

$lista1 = [
  'primeiro',
  'segundo',
  'terceiro',
  'quarto',
  'quinto'
];

var_dump(array_is_list($lista1));

$lista2 = [
  0 => 'primeiro',
  1 => 'segundo',
  2 => 'terceiro',
  3 => 'quarto',
  4 => 'quinto'
];

var_dump(array_is_list($lista2));
