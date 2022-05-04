<?php

namespace Alura\Banco\Modelo;

class Endereco
{

    public function __construct(
        private string $cidade,
        private string $bairro,
        private string $rua,
        private string $numero,
    ) {
    }

    public function recuperaCidade(): string
    {
        return $this->cidade;
    }

    public function recuperaBairro(): string
    {
        return $this->bairro;
    }

    public function recuperaRua(): string
    {
        return $this->rua;
    }

    public function recuperaNumero(): string
    {
        return $this->numero;
    }
}
