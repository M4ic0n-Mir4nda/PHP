<?php

$conta1 = [
    'titular' => 'Vinicius',
    'saldo' => 1000,
];

$conta2 = [
    'titular' => 'Lucas',
    'saldo' => 12300,
];

$conta3 = [
    'titular' => 'Larissa',
    'saldo' => 300,
];

$contasCorrentes = [$conta1, $conta2, $conta3];

for ($i = 0; $i < count($contasCorrentes); $i++) {
    echo $contasCorrentes[$i]['titular'] . PHP_EOL;
}