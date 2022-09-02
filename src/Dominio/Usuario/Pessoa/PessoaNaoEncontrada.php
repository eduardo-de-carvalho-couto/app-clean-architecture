<?php

namespace Api\Transferencia\Dominio\Usuario\Pessoa;

use Api\Transferencia\Dominio\Cpf;

class PessoaNaoEncontrada extends \DomainException
{
    public function __construct(Cpf $cpf)
    {
        parent::__construct("Usuario com CPF $cpf não encontrado");
    }
}