<?php

$array = [
  0 => 'zero',
  1 => 'Um',
  2 => 'Dois',
  3 => 'Três',
  4 => 'Quatro',
  5 => 'Cinco',
  6 => 'Seis',
  7 => 'Sete',
  8 => 'Oito',
  9 => 'Nove',
  10 => 'Dez'
];

for ($i = 0; $i < count($array); $i++) {
  echo "$array[$i] ";
}

echo PHP_EOL . PHP_EOL;

foreach ($array as $numero => $numeroEscrito) {
  echo "O número $numero em português se escreve: $numeroEscrito" . PHP_EOL;
}