<?php

require_once "bootstrap.php";

use models\SendLogAggregated;

$logRepository = $entityManager->getRepository(SendLogAggregated::class);
$aggregatedLogs = $logRepository->findAll();

$loader = new Twig_Loader_Filesystem('templates');

$twig = new Twig_Environment($loader, [
    'cache'       => 'templates/compilation_cache',
    'auto_reload' => true
]);

$twig = new Twig_Environment($loader);
echo $twig->render('logs.html', ['aggregatedLogs' => $aggregatedLogs]);