<?php

$listaCompras = ["Arroz", "Feijão", "Frutas", "Legumes", "Carne", "Vitaminas"];

$listaCompras['Lentilha'];
echo "LISTA DE COMPRAS:" . PHP_EOL;

foreach ($listaCompras as $item) {
  echo "$item" . PHP_EOL;
}