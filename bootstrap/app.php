<?php

$app = include __DIR__.'/../config/app.php';

use Symfony\Component\Dotenv\Dotenv;
use eftec\bladeone\BladeOne;

// RENDU DU FRONTEND VIA BLADE.
$views = __DIR__.'/../views/layouts';
$cache = __DIR__.'/../cache';
$blade = new BladeOne($views, $cache, BladeOne::MODE_DEBUG); // MODE_DEBUG permet de localiser les problèmes.
echo $blade->run("app", array("app_name" => $app['name'])); // il appelle /views/layouts/app.blade.php

// MISE EN PLACE DES CONFIGURATIONS VIA UN ENVIRONNEMENT 'DOTENV'.
// TODO (A FAIRE)
$dotenv = new Dotenv();
$dotenv->load(__DIR__.'/../.env');