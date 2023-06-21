<?php

require_once 'funcoes.php';
 
$contasCorrentes = [
    '369.885.326-12' => [
        'titular' => 'Vinicius',
        'saldo' => 1000,
    ],
    '985.632.541-47' => [
        'titular' => 'Lucas',
        'saldo' => 12000,
    ], 
    '365.214.748-76' => [
        'titular' => 'Larissa',
        'saldo' => 300,
    ]
];

$contasCorrentes['369.885.326-12'] = sacar($contasCorrentes['369.885.326-12'], 500);

$contasCorrentes['985.632.541-47'] = sacar($contasCorrentes['985.632.541-47'], 2000);

$contasCorrentes['365.214.748-76'] = depositar($contasCorrentes['365.214.748-76'], 900);

unset($contasCorrentes['985.632.541-47']);

titularComletrasMaisculas($contasCorrentes['365.214.748-76']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contas correntes</h1>

    <dl>
        <?php foreach($contasCorrentes as $cpf => $conta) { ?>
        <dt>
            <h3><?= $conta['titular']; ?> - <?= $cpf; ?></h3>
        </dt>
        <dd>
            Saldo: <?= $conta['saldo']; ?>
        <dd>
        <?php } ?>
    </dl>
</body>
</html>