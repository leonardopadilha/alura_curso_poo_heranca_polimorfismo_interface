<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\Funcionario\Colaborador;

class EditorVideo extends Colaborador
{
    public function calculaBonificacaoDoFuncionario(): float
    {
        return 600;
    }
}