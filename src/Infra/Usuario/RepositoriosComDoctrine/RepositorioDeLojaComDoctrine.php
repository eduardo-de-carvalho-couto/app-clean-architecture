<?php

namespace Api\Tranferencia\Infra\Usuario\RepositoriosComDoctrine;

use Api\Transferencia\Dominio\Cnpj;
use Api\Transferencia\Dominio\Usuario\Loja\Loja;
use Api\Transferencia\Dominio\Usuario\Loja\RepositorioDeLoja;

class RepositorioDeLojaComDoctrine implements RepositorioDeLoja
{
    public function adicionar(Loja $loja): void
    {
        //
    }

    public function buscarPorCnpj(Cnpj $cnpj): Loja
    {
        //
    }

    public function buscarTodos(): array
    {
        //
    }
}