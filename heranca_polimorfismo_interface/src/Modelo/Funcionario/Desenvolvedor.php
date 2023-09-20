<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\Funcionario\Colaborador;

class Desenvolvedor extends Colaborador
{
    public function aumentaDeNivel() : void
    {
        $this->recebeAumentoSalarial($this->recuperaSalario() * 0.75);
    }

    public function calculaBonificacaoDoFuncionario() : float
    {
        return 500.0;
    }
}