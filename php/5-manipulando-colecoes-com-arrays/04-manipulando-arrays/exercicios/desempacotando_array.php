<?php

$arrayFrutas = [
  'Banana',
  'Abacaxi',
  'Pera',
  'Abacate',
  'Jabuticaba',
  'Uva',
];

$arrayLegumes = [
  'Alface',
  'Tomate',
  'Beringela',
  'Pimentão'
];

$frutasMaisLegumes = [...$arrayFrutas, 'Jujuba', ...$arrayLegumes];
var_dump($frutasMaisLegumes) . PHP_EOL;

/* '...' antes de uma váriavel do tipo array significa que os valores dentro do array serão enviados para onde estiverem sendo enviados de forma individual. */

$nomeSobrenome = ['Ygor', 'Evaldt'];
function funcaoTeste(string $nome, string $sobrenome): void
{
  echo "$nome $sobrenome";
}
funcaoTeste(...$nomeSobrenome);
