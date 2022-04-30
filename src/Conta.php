<?php

class Conta
{
    private string $cpfTitular;
    private string $nomeTitular;
    private float $saldo;
    private static $numeroContas = 0;

    public function __construct(
        string $nomeTitular,
        string $cpfTitular
    ) {
        $this->cpfTitular      = $cpfTitular;
        $this->nomeTitular     = $nomeTitular;
        $this->validaNomeTitular($nomeTitular);
        $this->saldo           = 0;

        self::$numeroContas++;
    }

    public function saca(float $valorASacar)
    {
        if ($valorASacar > $this->saldo) {
            echo "Saldo indisponível";
        } else {
            $this->saldo -= $valorASacar;
        }
    }

    public function deposita(float $valorADepositar): void
    {
        if ($valorADepositar < 0) {
            echo "O valor precisa ser positivo";
        } else {
            $this->saldo += $valorADepositar;
        }
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

    public function recuperaCpfTitular(): string
    {
        return $this->cpfTitular;
    }

    public function recuperaNomeTitular(): string
    {
        return $this->nomeTitular;
    }

    private function validaNomeTitular(string $nomeTitular): void
    {
        if (strlen($nomeTitular) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres" . PHP_EOL;
            exit();
        }
    }

    public static function recuperaNumeroContas(): int
    {
        return self::$numeroContas;
    }
}
