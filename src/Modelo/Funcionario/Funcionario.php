<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\{Cpf, Pessoa};

abstract class Funcionario extends Pessoa
{
    private float $salario;

    public function __construct(string $nome, Cpf $cpf, float $salario)
    {
        parent::__construct($nome, $cpf);
        $this->salario = $salario;
    }

    public function recuperaSalario(): float
    {
        return $this->salario;
    }

    public function alteraNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function recebeAumento(float $valorAumento): void
    {
        if ($valorAumento < 0)
        {
            echo 'Aumento precisa ser positivo';
            return;
        }

        $this->salario += $valorAumento;
    }

    abstract public function calculaBonificacao();
}
