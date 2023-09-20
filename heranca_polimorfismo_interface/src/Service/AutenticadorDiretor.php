<?php

namespace Alura\Banco\Service;

use Alura\Banco\Modelo\Funcionario\Diretor;

class AutenticadorDiretor
{
    public function tentaRealizarLogin(Diretor $diretor, string $senha): void
    {
        if ($diretor->podeAutenticarCorretamente($senha)) {
            echo "Ok. Usuário logado no sistema com sucesso";
        } else {
            echo "Ops. Senha incorreta";
        }
    }
}