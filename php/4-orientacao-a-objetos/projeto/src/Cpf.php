<?php

class Cpf
{
  public function __construct
  (
    private string $cpf
  )
  {
    self::validaCpf($cpf);
  }

  public function getCpf(): string
  {
    return $this->cpf;
  }

  public function validaCpf(): void
  {
    if (mb_strlen($this->cpf) < 14) {
      echo "Cpf inválido" . PHP_EOL;
      exit();
    }
  }
}