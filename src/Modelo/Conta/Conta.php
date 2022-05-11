<?php

namespace Alura\Banco\Modelo\Conta;

abstract class Conta
{
    protected float $saldo;
    private Titular $titular;
    private static $numeroContas = 0;

    public function __construct( Titular $titular) {
        $this->titular = $titular;
        $this->saldo = 0;
        self::$numeroContas++;
    }

    public function saca(float $valorASacar)
    {
        $tarifaSaque = $valorASacar * $this->percentualTarifa();
        $valorSaque = $valorASacar + $tarifaSaque;

        if ($valorSaque > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->saldo -= $valorSaque;
    }

    public function deposita(float $valorADepositar): void
    {
        if ($valorADepositar < 0) {
            echo "O valor precisa ser positivo";
            return;
        }

        $this->saldo += $valorADepositar;
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

    abstract protected function percentualTarifa(): float;

}
