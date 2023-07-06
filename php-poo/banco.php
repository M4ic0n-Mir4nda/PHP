<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Conta\Conta;
use Alura\Banco\Modelo\CPF;

$endereco = new Endereco('São Paulo', 'São joaquim', 'Rua silveira', '71B');
$marcos = new Titular(new CPF('123.456.789-10'), 'Maicon Miranda', $endereco);
$primeiraConta = new Conta($marcos);
$primeiraConta->depositar(500);
$primeiraConta->sacar(300);

echo $primeiraConta->recuperaNomeTitular() .PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() .PHP_EOL;
echo $primeiraConta->recuperarSaldo() .PHP_EOL;

$luiza = new Titular(new CPF('123.458.984-10'), 'Luiza', $endereco);
$segundaConta = new Conta($luiza);
var_dump($segundaConta);

$outroEndereco = new Endereco('A', 'b', 'c', '1B');
$lucas = new Titular(new CPF('987.654.312-10'), 'Lucas', $outroEndereco);
unset($segundaConta);
echo Conta::recuperaNumeroDecontas();
