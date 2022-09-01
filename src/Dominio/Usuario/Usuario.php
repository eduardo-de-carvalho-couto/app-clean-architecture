<?php

namespace Api\Transferencia\Dominio\Usuario;

use Api\Transferencia\Dominio\Documento;
use Api\Transferencia\Dominio\Email;

abstract class Usuario 
{
    protected string $nome;
    protected Documento $documento;
    protected Email $email;
    protected string $senha;

    public function __construct(string $nome, Documento $documento, Email $email)
    {
        $this->nome = $nome;
        $this->documento = $documento;
        $this->email = $email;
    }

    public function getNome(): string
    {
        return $this->nome;
    }
    
    abstract public function getDocumento(): string;

    public function getEmail(): string
    {
        return $this->email;
    }
}