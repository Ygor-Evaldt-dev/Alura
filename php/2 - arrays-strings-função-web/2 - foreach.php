<?php
/* O PHP só aceita como chaves de arrays os tipos integer ou string, todos os outros tipos o PHP tenta converter */
/* em arrays simples, com índice numérico, basta usar [] para adicionar um elemento no final (por exemplo, $lista[] = 12;) */

/* array assossiativo */
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

/* Adicionando um novo item a lista de contas */ 
$contasCorrente['519.836.019-12'] = [
  'titular' => 'Claudia Rodrigues',
  'saldo' => 2400
];

/* Laço para percorrer um array sem precisar saber o nome de seus indices */
foreach ($contasCorrente as $cpf => $conta) {
  echo " Cpf: " . $cpf . " - " .  $conta['titular'] . PHP_EOL;
}
