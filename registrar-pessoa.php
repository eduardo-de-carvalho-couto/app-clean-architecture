<?php

use Api\Transferencia\Aplicacao\Usuario\Pessoa\RegistrarPessoa\RegistrarPessoa;
use Api\Transferencia\Aplicacao\Usuario\Pessoa\RegistrarPessoa\RegistrarPessoaDto;
use Api\Transferencia\Dominio\Cpf;
use Api\Transferencia\Dominio\Usuario\Pessoa\Pessoa;
use Api\Transferencia\Infra\Usuario\RepositoriosEmMemoria\RepositorioDePessoaEmMemoria;

require 'vendor/autoload.php';

/*
$cpf = $argv[1];
$nome = $argv[2];
$email = $argv[3];

$pessoa = Pessoa::comDocumentoNomeEEmail($cpf, $nome, $email);
$repositorioDePessoa = new RepositorioDePessoaEmMemoria();
$repositorioDePessoa->adicionar($pessoa);

*/

$cpf = $argv[1];
$nome = $argv[2];
$email = $argv[3];

$dadosPessoa = new RegistrarPessoaDto(
    $cpf,
    $nome,
    $email
);

$repositorioDePessoa = new RepositorioDePessoaEmMemoria();
$useCase = new RegistrarPessoa($repositorioDePessoa);

$useCase->executa($dadosPessoa);

$pessoa = $repositorioDePessoa->buscarPorCpf(new Cpf($cpf));