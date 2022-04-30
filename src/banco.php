<?php

require_once 'Conta.php';

$primeiraConta = new Conta("Luiz Guilherme", "084.506.404-58");
$primeiraConta->deposita(1000);
$primeiraConta->saca(300);
//echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$segundaConta   = new Conta("Paulo Braz", "020.552.544-05");
$terceiraConta  = new Conta("Lenilda Maria", "999.999.999-10");

echo Conta::recuperaNumeroContas();
