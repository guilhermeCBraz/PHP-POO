<?php

use Alura\Banco\Modelo\Conta\{Titular, ContaCorrente, ContaPoupanca};
use Alura\Banco\Modelo\{Cpf, Endereco};

require_once 'autoload.php';


$conta = new ContaPoupanca(
    new Titular(
        'Vinicius Dias',
        new Cpf('123.456.789-10'),
        new Endereco('Petrópolis', 'bairro teste', 'Rua lá', '37')
    )
);

$conta->deposita(500);
$conta->saca(100);

echo $conta->recuperaSaldo();

