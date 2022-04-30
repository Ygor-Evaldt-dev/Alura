<?php

$listaCompras = ["Arroz", "Feijão", "Frutas", "Legumes", "Carne", "Vitaminas"];

echo "LISTA DE COMPRAS:" . PHP_EOL;
for ($i=0 ; $i < count($listaCompras) ; $i++) {
  echo "$i - $listaCompras[$i]" . PHP_EOL;
}