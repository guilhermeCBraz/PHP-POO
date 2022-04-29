<?php

require_once 'Conta.php';

$primeiraConta = new Conta();
$primeiraConta->sacar(300);
echo "$primeiraConta->saldo";
