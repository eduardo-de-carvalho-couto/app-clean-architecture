<?php

namespace Api\Tranferencia\Infra\Usuario\RepositoriosComDoctrine;

use Api\Transferencia\Dominio\Cpf;
use Api\Transferencia\Dominio\Usuario\Pessoa\Pessoa;
use Api\Transferencia\Dominio\Usuario\Pessoa\RepositorioDePessoa;

class RepositorioDePessoaComDoctrine implements RepositorioDePessoa
{
    public function adicionar(Pessoa $pessoa): void
    {
        //
    }

    public function buscarPorCpf(Cpf $cpf): Pessoa
    {
        //
    }

    public function buscarTodos(): array
    {
        //
    }
}