<?php

namespace Api\Transferencia\Dominio\Usuario\Loja;

use Api\Transferencia\Dominio\Cnpj;

interface RepositorioDeLoja
{
    public function adicionar(Loja $loja): void;
    public function buscarPorCnpj(Cnpj $cnpj): Loja;
    /** @return Loja[] */
    public function buscarTodos(): array;
}