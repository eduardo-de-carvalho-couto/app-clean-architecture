<?php

namespace Api\Transferencia\Dominio\Usuario;

class Pessoa extends Usuario
{
    public function getDocumento(): string
    {
        return $this->documento;
    }
}
