<?php

/* require_once 'src/Modelo/Conta/Conta.php';
require_once 'src/Modelo/Endereco.php';
require_once 'src/Modelo/NewPessoa.php';
require_once 'src/Modelo/Conta/Titular.php';
require_once 'src/Modelo/CPF.php'; */

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\Conta;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\CPF;

$endereco = new Endereco("Cidade teste", "bairro teste", "Rua teste", "145 C");
$cpf = new CPF('123.456.789-10');
$titular = new Titular('Teste teste da silva', $cpf, $endereco);

$primeiraConta = new Conta($titular);
$primeiraConta->deposita(100);
//echo $primeiraConta->saca(3500);

var_dump($primeiraConta);
