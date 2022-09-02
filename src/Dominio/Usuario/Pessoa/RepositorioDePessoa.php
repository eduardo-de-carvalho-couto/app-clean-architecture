<?php

namespace Api\Transferencia\Dominio\Usuario\Pessoa;

use Api\Transferencia\Dominio\Cpf;

interface RepositorioDePessoa
{
    public function adicionar(Pessoa $pessoa): void;
    public function buscarPorCpf(Cpf $cpf): Pessoa;
    /** @return Pessoa[] */
    public function buscarTodos(): array;
}