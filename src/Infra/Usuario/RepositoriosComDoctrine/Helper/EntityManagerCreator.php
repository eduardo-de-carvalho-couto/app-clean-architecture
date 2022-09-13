<?php

namespace Api\Transferencia\Infra\Usuario\RepositoriosComDoctrine\Helper;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Tools\Setup;

class EntityManagerCreator
{
    public function criaEntityManager(): EntityManagerInterface
    {
        $config = Setup::createXMLMetadataConfiguration(
            [__DIR__ . '/../Mapeamentos']
        );
        $con = [
            'driver' => 'pdo_sqlite',
            'path' => __DIR__ . '/../../../../../db.sqlite',
        ];

        return EntityManager::create($con, $config);
    }
}