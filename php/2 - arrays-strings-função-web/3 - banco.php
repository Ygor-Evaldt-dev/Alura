<?php 

$contaCorrente = [
  '039.193.440-65' => [
    'titular' => "Ygor Evaldt",
    'telefone' => "(51) 98331-3468",
    'endereço' => "Três Cachoeiras - RS",
    'saldo' => 287.00
  ],
  '041.836.250-50' => [
    'titular' => "Thais Constant",
    'telefone' => "(51) 99886-7246",
    'endereço' => "Três Cachoeiras - RS",
    'saldo' => 100.00
  ]
];

foreach ($contaCorrente as $cpf => $conta) {
  echo  $cpf . "\nTitular - " . $conta['titular'] . "\nTelefone: " . $conta['telefone'] . "\nEndereço: " . $conta['endereço'] . "\nSaldo: $" . $conta['saldo'] . PHP_EOL . PHP_EOL;
}