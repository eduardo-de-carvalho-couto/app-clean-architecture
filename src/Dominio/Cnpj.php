<?php

namespace Api\Transferencia\Dominio;

class Cnpj
{
    private string $numero;

    public function __construct(string $numero)
    {
        $this->setNumero($numero);
    }
    
    private function setNumero(string $numero): void
    {
        $opcoes = [
            'options' => [
                'regexp' => '/\d{2}\.\d{3}\.\d{3}\/\d{4}\-\d{2}/',
            ]
        ];
        if (filter_var($numero, FILTER_VALIDATE_REGEXP, $opcoes) === false) {
            throw new \InvalidArgumentException('CNPJ no formato inválido');
        }

        $this->numero = $numero;
    }
    
    public function __toString(): string
    {
        return $this->numero;
    }
}