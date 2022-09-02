<?php

namespace Api\Transferencia\Infra;

use Api\Transferencia\Dominio\Cnpj;
use Api\Transferencia\Dominio\Usuario\Loja\Loja;
use Api\Transferencia\Dominio\Usuario\Loja\LojaNaoEncontrada;
use Api\Transferencia\Dominio\Usuario\Loja\RepositorioDeLoja;

class RepositorioDeLojaEmMemoria implements RepositorioDeLoja
{
    private array $lojas = [];

    public function adicionar(Loja $loja): void
    {
        $this->lojas[] = $loja;
    }

    public function buscarPorCnpj(Cnpj $cnpj): Loja
    {
        $lojasFiltradas = array_filter($this->lojas, function(Loja $loja) use ($cnpj){
            $loja->getDocumento() == $cnpj;
        });

        if(count($lojasFiltradas) === 0){
            throw new LojaNaoEncontrada($cnpj);
        }

        if(count($lojasFiltradas) > 1){
            throw new \Exception();
        }

        return $lojasFiltradas[0];
    }

    public function buscarTodos(): array
    {
        return $this->lojas;
    }
}