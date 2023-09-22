<?php

namespace Alura\Banco\Modelo;

trait AcessarPropriedades
{
    public function __get(string $nomeAtributo)
    {
        // rua -> recuperaRua
        $metodo = 'recupera' . ucfirst($nomeAtributo) ;
        return $this->$metodo();
    }
}