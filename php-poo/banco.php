<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/CPF.php';

$maicon = new Titular(new CPF('123.456.789-10'), 'Maicon Miranda');
$primeiraConta = new Conta($maicon);
$primeiraConta->depositar(500);
$primeiraConta->sacar(300);

echo $primeiraConta->recuperaNomeTitular() .PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() .PHP_EOL;
echo $primeiraConta->recuperarSaldo() .PHP_EOL;

$lucas = new Titular(new CPF('987.654.312-10'), 'Lucas');
$segundaConta = new Conta($lucas);
var_dump($segundaConta);

$outra = new Conta(new Titular(new CPF('123.458.984-10'), 'abcdf'));
unset($segundaConta);
echo Conta::recuperaNumeroDecontas();