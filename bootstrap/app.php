<?php

use Dotenv\Dotenv;
use eftec\bladeone\BladeOne;

// MISE EN PLACE DES CONFIGURATIONS VIA UN ENVIRONNEMENT 'DOTENV'.
$dotenv = Dotenv::createImmutable(__DIR__.'/../');
$dotenv->load();

// CONFIGURATION DE L'APPLICATION / RELAI VARIABLES .ENV
$app = include __DIR__.'/../config/app.php';

// RENDU DU FRONTEND VIA BLADE.
$views = __DIR__.'/../views/layouts';
$cache = __DIR__.'/../cache';
$blade = new BladeOne($views, $cache, BladeOne::MODE_DEBUG); // MODE_DEBUG permet de localiser les problèmes.
echo $blade->run("app", array("app_name" => $app['name'])); // il appelle /views/layouts/app.blade.php