<?php

$contasCorrentes = [
    '369.885.326-12' => [
        'titular' => 'Vinicius',
        'saldo' => 1000,
    ],
    '985.632.541-47' => [
        'titular' => 'Lucas',
        'saldo' => 12300,
    ], 
    '365.214.748-76' => [
        'titular' => 'Larissa',
        'saldo' => 300,
    ]
];

$contasCorrentes['123.459.356-32'] = [
    'titular' => 'Maicon',
    'saldo' => 1200
];

foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . ' ' . $conta['titular'] . PHP_EOL;
}