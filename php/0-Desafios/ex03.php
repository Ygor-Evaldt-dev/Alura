<?php

/* Calculo IMC */
$peso = 86;
$altura = 1.78;
$imc = $peso / $altura ** 2;
$imc = number_format($imc, 2, ',', '.');

echo "O seu imc é de $imc. Você está com o IMC ";
if ($imc < 18) {
  echo "abaixo ";
}
elseif ($imc < 25) {
  echo "dentro" ; 
}
else {
  echo "acima";
}
echo " do recomendado";