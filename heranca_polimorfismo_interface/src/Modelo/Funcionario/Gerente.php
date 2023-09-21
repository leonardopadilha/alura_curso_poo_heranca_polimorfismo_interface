<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\ColaboradorAutenticavel;
use Alura\Banco\Modelo\Funcionario\Colaborador;

class Gerente extends Colaborador implements ColaboradorAutenticavel
{
    public function calculaBonificacaoDoFuncionario(): float
    {
        return $this->recuperaSalario();
    }

    public function podeAutenticarCorretamente(string $senha)
    {
        return $senha === '4321';
    }
}