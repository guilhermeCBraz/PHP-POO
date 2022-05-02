<?php

class Titular
{

    public function __construct(
        private string $nome,
        private Cpf $cpf
    ) {
        $this->validaNomeTitular($this->nome);
    }

    public function recuperaNome(): string
    {
        return $this->nome;
    }

    public function recuperaCpf(): string
    {
        return $this->cpf->recuperaNumero();
    }

    private function validaNomeTitular(string $nome): void
    {
        if (strlen($nome) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres" . PHP_EOL;
            exit();
        }
    }
}
