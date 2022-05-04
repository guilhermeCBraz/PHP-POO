<?php

namespace Alura\Banco\Modelo\Conta;

class Titular extends Pessoa
{
    private Endereco $endereco;

    public function __construct(string $nome, Cpf $cpf, Endereco $endereco)
    {
        parent::__construct($nome, $cpf);
        $this->endereco = $endereco;
    }

    public function recuperaEndereco(): Endereco
    {
        return $this->endereco;
    }
}
