<?php

namespace Api\Tranferencia\Infra\Usuario\RepositoriosComDoctrine;

use Api\Transferencia\Dominio\Cnpj;
use Api\Transferencia\Dominio\Usuario\Loja\Loja;
use Api\Transferencia\Dominio\Usuario\Loja\RepositorioDeLoja;
use Api\Transferencia\Infra\Usuario\RepositoriosComDoctrine\Helper\EntityManagerCreator;

class RepositorioDeLojaComDoctrine implements RepositorioDeLoja
{
    private EntityManagerCreator $entityManager;

    public function __construct(EntityManagerCreator $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function adicionar(Loja $loja): void
    {
        
    }

    public function buscarPorCnpj(Cnpj $cnpj): Loja
    {
        
    }

    public function buscarTodos(): array
    {
        
    }
}