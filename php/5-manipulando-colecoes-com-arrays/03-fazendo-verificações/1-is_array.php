<?php

/* A função is_array() verifica se uma variável é um array ou não.
Esta função retorna true (1) se a variável for um array, caso contrário, retorna false/nada. */

$lista = [
  'primeiro' => 1,
  'segundo' => 2,
  'terceiro' => 3,
  'quarto' => 4,
  'quinto' => 5,
  'sexto' => 6,
  'sétimo' => 7
];

var_dump(is_array($lista));
