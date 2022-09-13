<?php

namespace Api\Tranferencia\Testes\Dominio;

use Api\Transferencia\Dominio\Email;
use PHPUnit\Framework\TestCase;

class EmailTest extends TestCase
{
    public function testEmailNoFormatoInvalidoNaoDevePoderExistir()
    {
        $this->expectException(\InvalidArgumentException::class);
        new Email('email inválido');
    }

    public function testEmailDevePoderSerRepresentadoComoString()
    {
        $email = new Email('endereco@teste.com');
        $this->assertSame('endereco@teste.com', (string) $email);
    }
}