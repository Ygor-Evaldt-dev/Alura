<?php
/* A função compact() cria um array com chaves do mesmo nome da variável já existente no código. */

$abacate = 'abacate';
$pera = 'pera';
$maca  = 'maça';
$banana = 'banana';
$cana  = 'cana';


var_dump(compact('abacate', 'pera', 'maca', 'banana', 'cana'));
