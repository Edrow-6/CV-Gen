<?php

$router = new \Buki\Router\Router([
    'debug' => true,
    'base_folder' => __DIR__,
    'paths' => [
        'controllers' => '../Controllers',
    ],
    'namespaces' => [
        'controllers' => 'App\Controllers',
    ]
]);

// Charger les routes définies
require_once '../routes/web.php';

// Exécuter le système
$router->run();