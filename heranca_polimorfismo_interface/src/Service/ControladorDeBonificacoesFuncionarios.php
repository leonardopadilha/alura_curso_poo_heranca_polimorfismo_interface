<?php

namespace Alura\Banco\Service;

use Alura\Banco\Modelo\Funcionario\Colaborador;

class ControladorDeBonificacoesFuncionarios
{
    private float $totalBonificacoes = 0;

    public function adicionaBonificacoesDosFuncionarios(Colaborador $funcionario)
    {
        $this->totalBonificacoes += $funcionario->calculaBonificacaoDoFuncionario();
    }

    public function recuperaTotalBonificacoes() : float
    {
        return $this->totalBonificacoes;
    }
}