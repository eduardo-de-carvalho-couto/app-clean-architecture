<?php

use Doctrine\ORM\Tools\Console\ConsoleRunner;
use Doctrine\ORM\Tools\Console\EntityManagerProvider\SingleManagerProvider;

// bootstrap file
require_once __DIR__ . '/../vendor/autoload.php';

$entityManager = Api\Transferencia\Infra\Usuario\RepositoriosComDoctrine\Helper\EntityManagerCreator::criaEntityManager();

ConsoleRunner::run(
    new SingleManagerProvider($entityManager)
);