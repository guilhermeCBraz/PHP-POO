<?php

class Conta
{
    public string $cpf;
    public string $nomeTitular;
    private float $saldo = 0;

    public function sacar(float $valorASacar)
    {
        if ($valorASacar > $this->saldo) {
            echo "Saldo indisponível";
        } else {
            $this->saldo -= $valorASacar;
        }
    }

    public function depositar(float $valorADepositar): void
    {
        if ($valorADepositar < 0) {
            echo "O valor precisa ser positivo";
        } else {
            $this->saldo += $valorADepositar;
        }
    }

    public function transferir(float $valorATransferir, Conta $contaDestino): void
    {
        if ($valorATransferir < 0) {
            echo "O valor precisar ser positivo";
            return;
        }

        if ($valorATransferir > $this->saldo) {
            echo "Você não possui saldo suficiente para efetuar a transferência";
            return;
        }

        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);
    }
}
