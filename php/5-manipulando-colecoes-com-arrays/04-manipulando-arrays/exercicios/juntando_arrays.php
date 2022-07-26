<?php

$arrayFriends = [
  'Ygor',
  'Thais',
  'Demétrio',
  'Vitor',
  'Sandro'
];

$arrayWorking = [
  'Leticia',
  'Camila',
  'Tulio',
  'Nick',
  'Alini'
];

echo 'Juntando os arrays "Friends" e "Working"' . PHP_EOL;
var_dump(array_merge($arrayFriends, $arrayWorking));

// Também é possível juntar arrays utilizando o operador de adição '+', porém utilizando este operador, as chaver ocupadas pelo primeiro array passado no argumento da função 'array_merge() serão mantidas e as dos demais arrays descartadas.'