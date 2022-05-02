<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/Cpf.php';
require_once 'src/Endereco.php';


$endereco = new Endereco('Petrópolis', 'um bairro', 'minha rua', '71B');

$cliente1 = new Titular("Pedro", new Cpf('123.456.789-10'), $endereco);

$conta1 = new Conta($cliente1);

$cliente2 = new Titular("João Silva", new Cpf("298.654.321-10"), $endereco);

$conta2 = new Conta($cliente2);

var_dump($cliente1);
