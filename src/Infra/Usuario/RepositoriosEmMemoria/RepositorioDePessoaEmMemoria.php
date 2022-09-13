<?php

namespace Api\Transferencia\Infra\Usuario\RepositoriosEmMemoria;

use Api\Transferencia\Dominio\Cpf;
use Api\Transferencia\Dominio\Usuario\Pessoa\Pessoa;
use Api\Transferencia\Dominio\Usuario\Pessoa\PessoaNaoEncontrada;
use Api\Transferencia\Dominio\Usuario\Pessoa\RepositorioDePessoa;

class RepositorioDePessoaEmMemoria implements RepositorioDePessoa
{
    private array $pessoas = [];

    public function adicionar(Pessoa $pessoa): void
    {
        $this->pessoas[] = $pessoa;
    }

    public function buscarPorCpf(Cpf $cpf): Pessoa
    {
        $pessoasFiltradas = array_filter(
            $this->pessoas,
            fn (Pessoa $pessoa) => $pessoa->getDocumento() == $cpf
        );

        if(count($pessoasFiltradas) === 0){
            throw new PessoaNaoEncontrada($cpf);
        }

        if(count($pessoasFiltradas) > 1){
            throw new \Exception();
        }

        return $pessoasFiltradas[0];
    }

    public function buscarTodos(): array
    {
        return $this->pessoas;
    }
}