<?php

/* Tabuada de um número */
$numero = 1;
$i = 1;

while ($i <= 10) {
  $resultado = $numero * $i;
  echo "$i x $numero = $resultado" . PHP_EOL;
  $i++;
}