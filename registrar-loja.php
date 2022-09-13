<?php

use Api\Transferencia\Aplicacao\Usuario\Loja\RegistrarLoja\RegistrarLoja;
use Api\Transferencia\Aplicacao\Usuario\Loja\RegistrarLoja\RegistrarLojaDto;
use Api\Transferencia\Dominio\Cnpj;
use Api\Transferencia\Infra\Usuario\RepositoriosEmMemoria\RepositorioDeLojaEmMemoria;

require 'vendor/autoload.php';

$cnpj = $argv[1];
$nome = $argv[2];
$email = $argv[3];

$dadosLoja = new RegistrarLojaDto(
    $cnpj,
    $nome,
    $email
);

$repositorioDeLoja = new RepositorioDeLojaEmMemoria();
$useCase = new RegistrarLoja($repositorioDeLoja);

$useCase->executa($dadosLoja);

$loja = $repositorioDeLoja->buscarPorCnpj(new Cnpj($cnpj));