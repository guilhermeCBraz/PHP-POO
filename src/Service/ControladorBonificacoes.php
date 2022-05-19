<?php

namespace Alura\Banco\Service;

use Alura\Banco\Modelo\Funcionario\Funcionario;

class ControladorBonificacoes
{
    private float $totalBonificacoes = 0;

    public function adicionaBonificacaoDe(Funcionario $funcionario): float
    {
        return $this->totalBonificacoes += $funcionario->calculaBonificacao();
    }

    public function recuperaTotal(): float
    {
        return $this->totalBonificacoes;
    }
}