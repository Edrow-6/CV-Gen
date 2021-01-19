<?php

$app = include __DIR__.'/../config/app.php';

use Symfony\Component\Dotenv\Dotenv;
use eftec\bladeone\BladeOne;

// BLADE RENDERING TEMPLATE
$views = __DIR__.'/../views/layouts';
$cache = __DIR__.'/../cache';
$blade = new BladeOne($views, $cache, BladeOne::MODE_DEBUG); // MODE_DEBUG allows to pinpoint troubles.
echo $blade->run("app", array("app_name" => $app['name'])); // it calls /views/layouts/app.blade.php

// DOTENV FILE FOR KEY AND CREDENTIALS
$dotenv = new Dotenv();
$dotenv->load(__DIR__.'/../.env');