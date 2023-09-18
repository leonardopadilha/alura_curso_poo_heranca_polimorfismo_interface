<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\Funcionario\Colaborador;

class Gerente extends Colaborador
{
    public function calculaBonificacaoDoFuncionario(): float
    {
        return $this->recuperaSalario();
    }
}