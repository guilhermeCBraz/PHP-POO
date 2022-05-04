<?php

namespace Alura\Banco\Modelo\Conta;

class Conta
{
    private float $saldo;
    private static $numeroContas = 0;


    public function __construct(
        private Titular $titular
    ) {
        $this->saldo = 0;
        self::$numeroContas++;
    }

    public function saca(float $valorASacar)
    {
        if ($valorASacar > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->saldo -= $valorASacar;
    }

    public function deposita(float $valorADepositar): void
    {
        if ($valorADepositar < 0) {
            echo "O valor precisa ser positivo";
            return;
        }

        $this->saldo += $valorADepositar;
    }

    public function transferi(float $valorATransferir, Conta $contaDestino): void
    {
        if ($valorATransferir < 0) {
            echo "O valor precisar ser positivo";
            return;
        }

        if ($valorATransferir > $this->saldo) {
            echo "Você não possui saldo suficiente para efetuar a transferência";
            return;
        }

        $this->saca($valorATransferir);
        $contaDestino->deposita($valorATransferir);
    }

    public function recuperaSaldo(): float
    {
        return $this->saldo;
    }

    public function recuperaNomeTitular(): string
    {
        return $this->titular->recuperaNome();
    }

    public function recuperaCpfTitular(): string
    {
        return $this->titular->recuperaCpf();
    }

    public static function recuperaNumeroContas(): int
    {
        return self::$numeroContas;
    }
}
