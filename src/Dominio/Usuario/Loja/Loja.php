<?php

namespace Api\Transferencia\Dominio\Usuario\Loja;

use Api\Transferencia\Dominio\Cnpj;
use Api\Transferencia\Dominio\Usuario\Usuario;

class Loja extends Usuario
{
    private Cnpj $cnpj;

    public function getDocumento(): string
    {
        return $this->cnpj;
    }
}