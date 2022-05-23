<?php

class Titular
{
  public function __construct
  (
    private string $titular
  )
  {
    self::validaNomeTitular($titular);
  }

  public function getTitular(): string
  {
    return $this->titular;
  }

  public function validaNomeTitular(string $nome)
  {
    if (mb_strlen($nome) < 5) {
      echo "O nome do titular precisa ter no minimo 5 caracteries - tente nome e sobrenome." . PHP_EOL;
      exit();
    }
  }
}