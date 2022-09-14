<?php

namespace Api\Transferencia\Infra\Usuario\RepositoriosComDoctrine\Helper;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\ORMSetup;

class EntityManagerCreator
{
    public static function criaEntityManager(): EntityManagerInterface
    {
        $config = ORMSetup::createXMLMetadataConfiguration(
            [__DIR__ . '/../Mapeamentos']
        );
        $con = [
            'driver' => 'pdo_sqlite',
            'path' => __DIR__ . '/../../../../../db.sqlite',
        ];

        return EntityManager::create($con, $config);
    }
}