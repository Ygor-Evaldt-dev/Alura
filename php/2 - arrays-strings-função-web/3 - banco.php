<?php
$contasCorrente = [
  '123.456.789-10' => [
    'titular' => 'Ygor Evaldt',
    'saldo' => 1500
  ],
  '456.123.789-10' =>  [
    'titular' => 'Joaquim Pereira',
    'saldo' => 2000
  ],
  '789.456.132-00' => [
    'titular' => 'Cassia Fernandes',
    'saldo' => 1200
  ]
];

foreach ($contasCorrente as $cpf => $conta) {
  echo " Cpf: " . $cpf . " - " .  $conta['titular'] . PHP_EOL;
}
