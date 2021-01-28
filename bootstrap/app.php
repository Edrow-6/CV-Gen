<?php

use Dotenv\Dotenv;
//use eftec\bladeone\BladeOne;

// MISE EN PLACE DES CONFIGURATIONS VIA UN ENVIRONNEMENT 'DOTENV'.
$dotenv = Dotenv::createImmutable(__DIR__.'/../');
$dotenv->load();

// CONFIGURATION DE L'APPLICATION / RELAI VARIABLES .ENV
//$app = include __DIR__.'/../config/app.php';

require_once __DIR__.'/../app/core/router.php';

//echo $blade->run("layouts.app", array("app_name" => $app['name'])); // il appelle /views/layouts/app.blade.php