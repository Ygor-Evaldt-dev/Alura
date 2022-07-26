<?php

namespace Alura;

class Usuario
{
  private $nome;
  private $sobrenome;

  public function __construct(string $nomeCompleto)
  {
    $nomeCompleto = explode(" ", $nomeCompleto, 2);

    if (empty($nomeCompleto[0])) {
      $this->nome = "Não informado.";
    } else {
      $this->nome = $nomeCompleto[0];
    }

    if (count($nomeCompleto) < 2) {
      $this->sobrenome = "Não informado.";
    } else {
      $this->sobrenome = $nomeCompleto[1];
    }
  }

  public function getNome(): string
  {
    return $this->nome;
  }

  public function getSobrenome(): string
  {
    return $this->sobrenome;
  }
}
