<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Funcionario\Desenvolvedor;
use Alura\Banco\Modelo\Funcionario\Gerente;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Modelo\Funcionario\EditorVideo;

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Service\ControladorDeBonificacoesFuncionarios;

$cpf = new CPF("123.456.789-10");
$umFuncionario = new Desenvolvedor("João Teste", $cpf, 1000);
$outroFuncionario = new Gerente("Tião Teste", $cpf, 3000);
$umDiretor = new Diretor("Tião Teste", $cpf, 5000);
$editorVideo = new EditorVideo("Editor de video", $cpf, 2500);

$umFuncionario->aumentaDeNivel();

$controlador = new ControladorDeBonificacoesFuncionarios();
$controlador->adicionaBonificacoesDosFuncionarios($umFuncionario);
$controlador->adicionaBonificacoesDosFuncionarios($outroFuncionario);
$controlador->adicionaBonificacoesDosFuncionarios($umDiretor);
$controlador->adicionaBonificacoesDosFuncionarios($editorVideo);

echo $controlador->recuperaTotalBonificacoes();