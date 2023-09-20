<?php

require_once 'autoload.php';

use Alura\Banco\Service\AutenticadorDiretor;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Modelo\CPF;

$cpf = new CPF("123.456.789-10");
$diretor = new Diretor("Tião Teste", $cpf, 5000);
$autenticador = new AutenticadorDiretor();
$autenticador->tentaRealizarLogin($diretor, "1234");