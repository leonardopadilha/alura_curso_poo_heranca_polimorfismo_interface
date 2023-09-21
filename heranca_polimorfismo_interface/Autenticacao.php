<?php

require_once 'autoload.php';

use Alura\Banco\Service\AutenticaColaborador;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Modelo\Funcionario\Gerente;
use Alura\Banco\Modelo\CPF;

$cpf = new CPF("123.456.789-10");
$diretor = new Diretor("Tião Teste", $cpf, 5000);
$autenticador = new AutenticaColaborador();
$autenticador->tentaRealizarLogin($diretor, "1234");

echo PHP_EOL;

$gerente = new Gerente("Teste Tião", $cpf, 4000);
$autenticador->tentaRealizarLogin($gerente, "43211");