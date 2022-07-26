<?php

$lista = [
  [
    'nome' => 'Ygor Bitencourt Evaldt',
    'idade' => 25,
    'cpf' => '049.193.440-65',
    'endereco' => 'Três Cachoeiras',
    'bairro' => 'Santa rita',
    'cep' => '95580-000',
    'numero' => 419
  ],
  [
    'nome' => 'Thais Dos Santos Constant',
    'idade' => 24,
    'cpf' => '041.836.250-50',
    'endereco' => 'Três Cachoeiras',
    'bairro' => 'Santa rita',
    'cep' => '95580-000',
    'numero' => 419
  ]
];

echo PHP_EOL;
foreach ($lista as $index => ['nome' => $nome, 'idade' => $idade, 'cpf' => $cpf, 'endereco' => $endereco, 'bairro' => $bairro, 'cep' => $cep, 'numero' => $numero]) {
  echo "Conta: " . $index + 1 . PHP_EOL;
  echo "Nome: $nome" . PHP_EOL;
  echo "Idade: $idade" . PHP_EOL;
  echo "Cpf: $cpf" . PHP_EOL;
  echo "Endereço: $endereco" . PHP_EOL;
  echo "Bairro: $bairro" . PHP_EOL;
  echo "Cep: $cep" . PHP_EOL;
  echo "Número: $numero" . PHP_EOL;
  echo PHP_EOL;
}
