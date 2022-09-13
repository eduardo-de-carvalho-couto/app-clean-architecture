<?php

namespace Api\Tranferencia\Testes\Aplicacao\Pessoa;

use Api\Transferencia\Aplicacao\Usuario\Loja\RegistrarLoja\RegistrarLoja;
use Api\Transferencia\Aplicacao\Usuario\Loja\RegistrarLoja\RegistrarLojaDto;
use Api\Transferencia\Dominio\Cnpj;
use Api\Transferencia\Infra\Usuario\RepositoriosEmMemoria\RepositorioDeLojaEmMemoria;
use PHPUnit\Framework\TestCase;

class RegistrarLojaTest extends TestCase
{
    public function testLojaDeveSerAdicionadaAoRepositorio()
    {
        $dadosLoja = new RegistrarLojaDto(
            '12.345.678/0001-12',
            'Loja Teste',
            'loja@exemplo.com'
        );

        $repositorioDeLoja = new RepositorioDeLojaEmMemoria();
        $useCase = new RegistrarLoja($repositorioDeLoja);

        $useCase->executa($dadosLoja);

        $loja = $repositorioDeLoja->buscarPorCnpj(new Cnpj('12.345.678/0001-12'));
        $this->assertSame('Loja Teste', (string) $loja->getNome());
        $this->assertSame('loja@exemplo.com', (string) $loja->getEmail());
    }
}