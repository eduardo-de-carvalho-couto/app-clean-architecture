<?php

use Api\Transferencia\Dominio\Usuario\Pessoa\Pessoa;
use Api\Transferencia\Infra\Usuario\RepositoriosEmMemoria\RepositorioDePessoaEmMemoria;

require 'vendor/autoload.php';

$cpf = $argv[1];
$nome = $argv[2];
$email = $argv[3];

$pessoa = Pessoa::comDocumentoNomeEEmail($cpf, $nome, $email);
$repositorioDePessoa = new RepositorioDePessoaEmMemoria();
$repositorioDePessoa->adicionar($pessoa);