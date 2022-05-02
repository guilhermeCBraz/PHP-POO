<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/Cpf.php';


$cliente1 = new Titular("Pedro", new Cpf('123.456.789-10'));

$conta1 = new Conta($cliente1);

$cliente2 = new Titular("João Silva", new Cpf("298.654.321-10"));

$conta2 = new Conta($cliente2);

echo "{$cliente2->recuperaNome()}";
