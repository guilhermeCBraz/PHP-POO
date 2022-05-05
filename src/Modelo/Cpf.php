<?php

namespace Alura\Banco\Modelo;



class Cpf
{
    public function __construct(private string $numero)
    {
        $numero = filter_var($numero, FILTER_VALIDATE_REGEXP, [
            'options' => [
                'regexp' => '/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$/'
            ]
        ]);
        if ($numero === false) {
            echo "Cpf inválido";
            exit();
        }
    }

    public function recuperaNumero(): string
    {
        return $this->numero;
    }
}
