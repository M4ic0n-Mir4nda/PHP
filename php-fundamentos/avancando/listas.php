<?php

$idadeList = [21, 22, 23, 24, 25, 26];

list($idadeVinicius, $idadeJoao, $idadeMaria) = $idadeList;

$idadeList[] = 27;

foreach ($idadeList as $idade) {
    echo $idade . PHP_EOL;
}