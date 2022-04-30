<?php

$conta1 = [
  'titular' => 'Ygor Evaldt',
  'saldo' => 1500
];
$conta2 = [
  'titular' => 'Joaquim Pereira',
  'saldo' => 2000
];
$conta3 = [
  'titular' => 'Cassia Fernandes',
  'saldo' => 1200
];

$contasCorrente = [$conta1, $conta2, $conta3];

for ($i = 0 ; $i < count($contasCorrente) ; $i++) {
  echo $contasCorrente[$i]['titular'] . PHP_EOL;
}