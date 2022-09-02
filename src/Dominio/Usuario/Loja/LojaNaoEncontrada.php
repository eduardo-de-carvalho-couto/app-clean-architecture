<?php

namespace Api\Transferencia\Dominio\Usuario\Loja;

use Api\Transferencia\Dominio\Cnpj;

class LojaNaoEncontrada extends \DomainException
{
    public function __construct(Cnpj $cnpj)
    {
        parent::__construct("Loja com CNPJ $cnpj não encontrada.");
    }
}