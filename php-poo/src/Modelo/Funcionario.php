<?php

namespace Alura\Banco\Modelo;
class Funcionario extends Pessoa
{    private string $cargo;

    public function __construct(string $nome, CPF $cpf, $cargo)
    {
        parent::__construct($nome, $cpf);
        $this->cargo = $cargo;
    }

    public function recuperCargo(): string
    {
        return $this->cargo;
    }

    public function alteraNome(string $nome): void
    {
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
    }
}