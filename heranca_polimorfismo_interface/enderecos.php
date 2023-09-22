<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco("Uma Cidade", "Um Bairro", "Uma Rua", "Um Numero");
$outroEndereco = new Endereco("Outra Cidade", "Outro Bairro", "Outra Rua", "Outro número");

echo $umEndereco . PHP_EOL;
echo $outroEndereco . PHP_EOL;

echo $umEndereco->cidade . PHP_EOL;