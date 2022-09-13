<?php

namespace Api\Tranferencia\Testes\Aplicacao\Pessoa;

use Api\Transferencia\Infra\Usuario\RepositoriosEmMemoria\RepositorioDePessoaEmMemoria;
use Api\Transferencia\Aplicacao\Usuario\Pessoa\RegistrarPessoa\RegistrarPessoaDto;
use Api\Transferencia\Aplicacao\Usuario\Pessoa\RegistrarPessoa\RegistrarPessoa;
use Api\Transferencia\Dominio\Cpf;
use PHPUnit\Framework\TestCase;

class RegistrarPessoaTest extends TestCase
{
    public function testPessoaDeveSerAdicionadaAoRepositorio()
    {
        $dadosPessoa = new RegistrarPessoaDto(
            '123.456.789-10', 
            'Eduardo', 
            'eduardo@teste.com'
        );

        $repositorioDePessoa = new RepositorioDePessoaEmMemoria();
        $useCase = new RegistrarPessoa($repositorioDePessoa);

        $useCase->executa($dadosPessoa);

        $pessoa = $repositorioDePessoa->buscarPorCpf(new Cpf('123.456.789-10'));
        $this->assertSame('Eduardo', (string) $pessoa->getNome());
        $this->assertSame('eduardo@teste.com', (string) $pessoa->getEmail());
    }
}