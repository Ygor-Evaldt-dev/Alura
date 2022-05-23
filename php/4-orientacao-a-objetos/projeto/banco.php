<?php

require_once 'src/Titular.php';
require_once 'src/Cpf.php';
require_once 'src/Conta.php';


$conta1 = new Conta(new Titular('Ygor Evaldt'), new Cpf('039.193.440-65'));
$conta2 = new Conta(new Titular('Thais Constant'), new Cpf('041.836.250-50'));
quebraLinha();

$conta1->deposita(1000);
$conta1->saca(100);
$conta1->tranfere($conta2, 400);

quebraLinha();

exibeMensagem("Titular: {$conta1->getNomeTitular()}");
exibeMensagem("Cpf: {$conta1->getCpfTitular()}");
exibeMensagem("Saldo: {$conta1->getSaldo()}");

quebraLinha();

exibeMensagem("Titular: {$conta2->getNomeTitular()}");
exibeMensagem("Cpf: {$conta2->getCpfTitular()}");
exibeMensagem("Saldo: {$conta2->getSaldo()}");

quebraLinha();