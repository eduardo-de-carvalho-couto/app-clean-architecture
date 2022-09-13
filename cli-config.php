<?php

require_once __DIR__ . '/vendor/autoload.php';

$entityManager = (new \Api\Transferencia\Infra\Usuario\RepositoriosComDoctrine\Helper\EntityManagerCreator())->criaEntityManager();

return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($entityManager);