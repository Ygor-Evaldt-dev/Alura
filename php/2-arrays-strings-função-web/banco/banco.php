<?php
require_once 'funcoes.php'; //importando arquivo funcoes.php 

/* lista de contas */
$contasCorrente = [
  '039.193.440-65' => [
    'titular' => "Ygor Evaldt",
    'telefone' => "(51) 98331-3468",
    'endereço' => "Três Cachoeiras",
    'saldo' => 1500
  ],
  '041.836.250-50' => [
    'titular' => "Thaís Evaldt",
    'telefone' => "(51) 99886-7246",
    'endereço' => "Três Cachoeiras",
    'saldo' => 1500
  ],
];

/* Adicionar uma conta nova */
$contasCorrente['041.083.602-27'] = [
  'titular' => "Emma",
  'telefone ' => "(51) 98154-54202",
  'endereço' => "três Cachoeiras",
  'saldo' => 0
];

/* Excluir conta */
unset($contasCorrente['041.083.602-27']);

/* operações de saque */
$contasCorrente['039.193.440-65'] = saque($contasCorrente['039.193.440-65'], 100);

/* operações de depósito */
$contasCorrente['041.836.250-50'] = deposito($contasCorrente['041.836.250-50'], 1000);

/* nome maisculo */
$contasCorrente['041.836.250-50'] = nomeMaiusculo($contasCorrente['041.836.250-50']);

/* Resultado na tela */
foreach($contasCorrente as $conta => $dados) {
  ['titular' => $titular, 'saldo' => $saldo] = $dados; //Atribuindo valores da conta em variáveis para melhorar a leitura do código. metodo list()
  exibeMensagem(PHP_EOL . "Conta: $conta | Titular: $titular | Saldo: $ $saldo");
}