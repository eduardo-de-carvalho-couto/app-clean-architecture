<?php

namespace Api\Transferencia\Dominio\Usuario;

class Loja extends Usuario
{

    public function getDocumento(): string
    {
        return $this->documento;
    }
}