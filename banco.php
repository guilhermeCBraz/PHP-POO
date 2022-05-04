<?php

require_once 'src/Modelo/CConta.php';
require_once 'src/Titular.php';
require_once 'src/Cpf.php';
require_once 'src/Endereco.php';
require_once 'src/Pessoa.php';


$endereco = new Endereco('Petrópolis', 'um bairro', 'minha rua', '71B');

$cliente1 = new Titular("Pedro", new Cpf('123.456.789-10'), $endereco);
$conta1 = new Conta($cliente1);

$cliente2 = new Titular("João Silva", new Cpf("298.654.321-10"), $endereco);
$conta2 = new Conta($cliente2);

$outroEndereco = new Endereco('A', 'b', 'c', '1D');
$outraConta = new Conta(new Titular('Abdcef', new Cpf('123.654.789-01'), $outroEndereco));

var_dump($cliente1);
var_dump($cliente2);
