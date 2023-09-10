<?php

require_once 'src/Conta.php';
require_once 'src/Endereco.php';
require_once 'src/Titular.php';
require_once 'src/CPF.php';

$endereco = new Endereco("Cidade teste", "bairro teste", "Rua teste", "145 C");
$cpf = new CPF('123.456.789-10');
$titular = new Titular('Teste teste da silva', $cpf, $endereco);

$primeiraConta = new Conta($titular);
$primeiraConta->deposita(100);
//echo $primeiraConta->saca(3500);

var_dump($primeiraConta);
