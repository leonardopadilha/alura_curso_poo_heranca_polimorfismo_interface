<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\ContaPoupanca;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;

$cpf = new CPF("123.456.789-10");
$endereco = new Endereco("Cidade", "Bairro", "Rua", "Número");
$titular = new Titular("Nome do titular", $cpf, $endereco);
$contaPoupanca = new ContaPoupanca($titular);

$contaPoupanca->deposita(500);
$contaPoupanca->saca(100);
echo $contaPoupanca->recuperaSaldo();