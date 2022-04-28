<?php

class Conta
{
    public string $cpf;
    public string $nomeTitular;
    public float $saldo;

    public function sacar(float $valorASacar)
    {
        if ($valorASacar > $this->saldo) {
            echo "Saldo indisponível";
        } else {
            $this->saldo -= $valorASacar;
        }
    }

    public function depositar(float $valorADepositar)
    {
        $this->saldo += $valorADepositar;
    }
}
