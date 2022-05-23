<?php
require_once 'Titular.php';
require_once 'Cpf.php';
require_once 'funcoes.php';

class Conta
{
  public function __construct
  (
    private Titular $titular,
    private Cpf $cpf 
  )
  {
    self::$numeroDeContas++;
  }

  public function __destruct()
  {
    self::$numeroDeContas--;
  }

  private static $numeroDeContas = 0;
  private float $saldo = 0;

  public static function getNumeroDeContas(): int
  {
    return self::$numeroDeContas;
  }
  
  /* Recupera dados da conta */
  public function getNomeTitular(): string
  {
    return $this->titular->getTitular();
  }

  public function getCpfTitular(): string
  {
    return $this->cpf->getCpf();
  } 

  public function getSaldo(): float
  {
    return $this->saldo;
  }

  /* Operações da conta */
  public function deposita(float $valorDeposito): void
  {
    if ($valorDeposito < 0 || $valorDeposito == 0) {
      echo "Valor inválido." . PHP_EOL;
      return;
    }
    $this->saldo += $valorDeposito;  
    echo "Depósito realizado com sucesso." . PHP_EOL;
  }

  public function saca(float $valorSaque): void
  {
    if ($valorSaque < 0 || $valorSaque == 0) {
      echo "Valor inválido." . PHP_EOL;
      return;
    }
    if ($valorSaque > $this->saldo) {
      echo "Saldo insuficiente." . PHP_EOL;
      return;
    }
    $this->saldo -= $valorSaque;
    echo "Saque realizado com sucesso." . PHP_EOL;
  }

  public function tranfere(Conta $contaDestino, float $valorTranferencia): void
  {
    if ($valorTranferencia > $this->saldo) {
      echo "Saldo insuficiente." . PHP_EOL;
      return;
    }
    if ($valorTranferencia < 0 || $valorTranferencia == 0) {
      echo "Valor inválido." . PHP_EOL;
      return;
    }
    $this->saldo -= $valorTranferencia;
    $contaDestino->saldo += $valorTranferencia;
    exibeMensagem("{$this->getNomeTitular()} - Transferência realizada com sucesso para {$contaDestino->getNomeTitular()}");
  }

}