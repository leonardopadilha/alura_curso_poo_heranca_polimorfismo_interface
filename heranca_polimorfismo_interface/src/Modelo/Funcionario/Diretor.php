<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\Funcionario\Colaborador;

class Diretor extends Colaborador
{
    public function calculaBonificacaoDoFuncionario(): float
    {
        return $this->recuperaSalario() * 2;
    }

    public function podeAutenticarCorretamente(string $senha) : bool
    {
        return $senha === "1234";
    }
}