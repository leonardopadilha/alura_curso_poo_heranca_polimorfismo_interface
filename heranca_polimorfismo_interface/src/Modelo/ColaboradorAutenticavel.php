<?php

namespace Alura\Banco\Modelo;

interface ColaboradorAutenticavel
{
    public function podeAutenticarCorretamente(string $senha);
}