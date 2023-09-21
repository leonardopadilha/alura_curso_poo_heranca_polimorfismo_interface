<?php

namespace Alura\Banco\Service;

use Alura\Banco\Modelo\ColaboradorAutenticavel;

class AutenticaColaborador
{
    public function tentaRealizarLogin(ColaboradorAutenticavel $colaboradorAutenticavel, string $senha): void
    {
        if ($colaboradorAutenticavel->podeAutenticarCorretamente($senha)) {
            echo "Ok! Usuário logado no sistema com sucesso";
        } else {
            echo "Ops! Senha incorreta";
        }
    }
}