<?php
/* a extensão mbstring serve principalmente para trabalharmos corretamente com caracteries multbyte */

function exibeMensagem($mensagem) {
  echo $mensagem . PHP_EOL;
}

$string = "Testes de integração com PHP";
exibeMensagem(mb_strlen($string));
exibeMensagem(mb_strtoupper($string));
exibeMensagem(mb_convert_case($string, MB_CASE_TITLE));

