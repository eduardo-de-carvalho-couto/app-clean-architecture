<?php

namespace Api\Transferencia\Dominio\Usuario\Pessoa;

use Api\Transferencia\Dominio\Cpf;
use Api\Transferencia\Dominio\Usuario\Usuario;

class Pessoa extends Usuario
{
    private Cpf $cpf;

    public function getDocumento(): string
    {
        return $this->cpf;
    }
}
