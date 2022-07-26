<?php
/* A função extract() cria váriaveis com o mesmo nome das chaves para seus respectivos valores em um array.*/

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

for ($i = 0; $i < count($lista); $i++) {
  extract($lista[$i]);
  echo "Conta: " . $i + 1 . PHP_EOL;
  echo "Nome: $nome" . PHP_EOL;
  echo "Idade: $idade" . PHP_EOL;
  echo "Cpf: $cpf" . PHP_EOL;
  echo "Endereço: $endereco" . PHP_EOL;
  echo "Bairro: $bairro" . PHP_EOL;
  echo "Cep: $cep" . PHP_EOL;
  echo "Número: $numero" . PHP_EOL;
  echo PHP_EOL;
}
