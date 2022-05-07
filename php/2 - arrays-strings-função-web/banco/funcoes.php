<?php

/* Para mensagens com quebra de linha */
function exibeMensagem($mensagem) {
  echo $mensagem . PHP_EOL; 
}

/* funçãop para saque */
function saque(array $conta, float $valor): array 
{
  if ($conta['saldo'] < $valor) {
    exibeMensagem(" {$conta['titular']} - Você não pode sacar este valor");
  }
  else {
    $conta['saldo'] -= $valor;
  }
  return $conta;
}

/* funçãop para depósitos */
function deposito(array $conta, float $valor): array 
{
  if ($valor <= 0) {
    exibeMensagem("{$conta['titular']} - Valor de depósito inválido");
  }
  else {
    $conta['saldo'] += $valor;
  }
  return $conta;
}