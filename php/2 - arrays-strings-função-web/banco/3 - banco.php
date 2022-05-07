<?php
require_once 'funcoes.php';

/* lista de contas */
$contasCorrente = [
  '039.193.440-65' => [
    'titular' => "Ygor Evaldt",
    'telefone' => "(51) 98331-3468",
    'endereço' => "Três Cachoeiras",
    'saldo' => 1500
  ],
  '041.836.250-50' => [
    'titular' => "Thais Evaldt",
    'telefone' => "(51) 99886-7246",
    'endereço' => "Três Cachoeiras",
    'saldo' => 1500
  ]
];

/* operações de saque */
$contasCorrente['039.193.440-65'] = saque($contasCorrente['039.193.440-65'], 500);

/* operações de depósito */
$contasCorrente['041.836.250-50'] = deposito($contasCorrente['041.836.250-50'], 1000);

/* Resultado na tela */
foreach($contasCorrente as $conta => $dados) {
  exibeMensagem(PHP_EOL . "Conta: $conta | Titular: {$dados['titular']} | Saldo: $ {$dados['saldo']}");
}