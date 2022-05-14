<?php
/* escreva na tela todos os números impares de 0 a 100 */

for ($i = 0; $i <= 100; $i++) {
  if ($i % 2 == 1) {
    echo $i . PHP_EOL;
  }
}