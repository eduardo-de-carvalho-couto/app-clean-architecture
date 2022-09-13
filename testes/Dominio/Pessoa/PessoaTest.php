<?php

namespace Api\Tranferencia\Testes\Dominio\Pessoa;

use Api\Transferencia\Dominio\Usuario\Pessoa\Pessoa;
use PHPUnit\Framework\TestCase;

class PessoaTest extends TestCase
{
    public function testPessoaDeveSerCriadaComDocumentoNomeEEmailValido()
    {
        $pessoa = Pessoa::comDocumentoNomeEEmail(
            '123.456.789-10',
            'Teste',
            'teste@teste.com'
        );
        
        $this->assertSame('123.456.789-10', $pessoa->getDocumento());
        $this->assertSame('Teste', $pessoa->getNome());
        $this->assertSame('teste@teste.com', $pessoa->getEmail());
    }
}