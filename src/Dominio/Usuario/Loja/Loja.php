<?php

namespace Api\Transferencia\Dominio\Usuario\Loja;

use Api\Transferencia\Dominio\Cnpj;
use Api\Transferencia\Dominio\Email;
use Api\Transferencia\Dominio\Usuario\Usuario;

class Loja extends Usuario
{
    private Cnpj $cnpj;

    public static function comDocumentoNomeEEmail(string $documento, string $nome, string $email): self
    {
        return new Loja(new Cnpj($documento), $nome, new Email($email));
    }

    public function __construct(Cnpj $cnpj, string $nome, Email $email)
    {
        parent::__construct($nome, $email);

        $this->cnpj = $cnpj;
    }

    public function getDocumento(): string
    {
        return $this->cnpj;
    }
}