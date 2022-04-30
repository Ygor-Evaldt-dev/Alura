<?php

$idade = 15;
$numeroPessoas = 2;
echo "Você só pode entrar se for maior de 18 anos ou apartir de 16 anos acompanhado" . PHP_EOL;

if ($idade >= 18) {
  echo "Você tem $idade anos.". PHP_EOL;
  echo "Pode entrar sozinho";
} 
else if($idade >= 16 && $numeroPessoas > 1) {
  echo "Você tem $idade anos" . PHP_EOL;
  echo "Pode entrar pois está companhado por um responsável";
}
else {
  echo "Você tem $idade anos." . PHP_EOL;
  echo "Não pode entrar poís é menor de idade";
}
