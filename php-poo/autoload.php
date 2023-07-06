<?php

spl_autoload_register(function (string $nomeCompletoDaClasse) {
    // De > Alura\Banco\Modelo\Endereco
    // Para > src/Modelo/Endereco.php
    $caminhoArquivo = str_replace('Alura\\Banco', 'src', $nomeCompletoDaClasse);
    $caminhoArquivo = str_replace('\\', DIRECTORY_SEPARATOR, $caminhoArquivo);
    $caminhoArquivo .= '.php';

    if (file_exists($caminhoArquivo)) {
        require_once $caminhoArquivo;
    }
});