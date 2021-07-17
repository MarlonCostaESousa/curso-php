<?php

require_once 'Conta.php';
require_once 'Titular.php';
require_once 'CPF.php';

$marlon = new Titular(new CPF('123.456.789-10'), 'Marlon Sousa');
$primeiraConta = new Conta($marlon);
$primeiraConta->deposita(500);
$primeiraConta->saca(300);

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$reginaldo = new Titular(new CPF('123.456.789-12'), 'Reginaldo');
$segundaConta = new Conta($reginaldo);
var_dump($segundaConta);

$outra = new Conta(new Titular(new CPF('123.456.789-12'), 'Adeilto'));
unset($segundaConta);
echo Conta::recuperaNumeroDeContas() . PHP_EOL;