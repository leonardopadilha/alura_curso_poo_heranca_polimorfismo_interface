<?php

namespace Alura\Banco\Modelo;

use Alura\Banco\Modelo\CPF;

class NewPessoa
{
    protected string $nome;
    private CPF $cpf;

    public function __construct(string $nome, CPF $cpf)
    {
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function recuperaNome() : string
    {
        return $this->nome;
    }

    public function recuperaCpfTitular() : string
    {
        return $this->cpf->recuperaNumero();
    }

    // não é possível alterar um método final
    final protected function validaNomeTitular(string $nome) : void {
        if (strlen($nome) < 5) {
            $this->nome = $nome;
            exit();
        }
    }
}